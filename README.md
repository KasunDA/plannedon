# Planned On v0.5

Hello. Planned On is a linear, minimalist calendar app for smart people with important crap to do. It's way less restrictive than a typical calendar app, in that it doesn't force you to schedule things based on time. So that makes it better. Suck it.  

Try it, at [plannedon.com](http://plannedon.com)

## Architecture

Planned On is powered by AWS, Amazon's cloud services platform. The primary goal of this architecture is to keep costs to a minimum and truly only pay for what the application uses, since there's hardly any users at this time. Secondary goals include maintaining ownership of the application, i.e. being able to unplug from whatever service and move somewhere else with minimal fuss and not having to spend any time managing server nonsense.  
  
These are the services employed:  
  
* Route 53 - DNS service mapping domain names to an S3 bucket.  
* S3 - Serves static site content, essentially the UI, which makes calls to an API for user data and content.  
* API Gateway - the endpoint that maps to Lambda functions.  
* Elastic Beanstalk - manages EC2 instance(s) and makes deployment a snap.   
* DynamoDB - persistance.  

## Technologies

Ember.js  
jQuery  
Bootstrap  
Parsley javascript form validation  
C#  

## Coming Soon, or Sometime

* INFRASTRUCTURE: Move to "serverless"  
* FEATURE: Add feedback/support page for users to report things wrong  
* BACKEND: Better error handling and data passing around   
* MARKETING: (slicker landing page, more images)  
* MARKETING: How to use, walkthrough  
* MARKETING: Facebook ads  
* FEATURE: Repeat activity for X days/weeks/months  
* FEATURE: Go back and forward one week at a time  
* FEATURE: Tag activities with color labels  
* FEATURE: Some kind of sorting mechanism, instead of making the user do it manually  
* MARKETING: More info on how to plan effectively, and why it's good for us modern humans with shit to do (a, "This is how I use Planned On And Why" series)  
* FEATURE: Toggle public/private  

* Create an iphone app  
* Create a desktop app (maybe, why?)  