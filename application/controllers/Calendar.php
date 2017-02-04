<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends MY_Controller 
{
	private $data = null;

	public function __construct()
	{
		parent::__construct();

		if (! $this->UserData["authed"])
        {
            redirect("/login");
        }

		$this->data = $this->input->post("activityData");
		$this->load->model("Activity");
	}

	public function index()
	{
		$data["weeks_to_show"] = 9;
		$data["show_previous_week"] = TRUE;

		$this->LoadHead("Calendar");
		$this->LoadNav(TRUE);
		$this->load->view("calendar", $data);
	}

	public function get()
	{
		$result = $this->Activity->get($this->data, $this->UserData["email"]);

		if ($result === FALSE)
		{
			return(FALSE);
		}

		$this->load->view("activity", $result);
	}

	public function add()
	{
		$this->data["user_email"] = $this->UserData["email"];

		$result = $this->Activity->add($this->data);

		if ($result == FALSE)
		{
			return;
		}

		$this->data["id"] = $this->Activity->id;

		echo json_encode($this->data);
	}

	public function update()
	{
		$result = $this->Activity->update($this->data);

		if ($result == FALSE)
		{
			return;
		}

		echo json_encode($this->data);
	}

	public function remove()
	{
		$result = $this->Activity->delete($this->data);

		if ($result == FALSE)
		{
			return;
		}

		echo json_encode($this->data);
	}

}

/* End of file calendar.php */
/* Location: ./application/controllers/calendar.php */