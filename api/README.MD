# iKargo API #


# Folder Explanation #
common: common models or controllers
config: configuration file
modules: main core that contains API version
tests: test files
web: entry script 

# How to Develop API #
iKargo API is developed using Repository Service Pattern

About service pattern
http://www.devshed.com/c/a/php/php-service-layers-modeling-domain-objects/

About repository pattern

# How to Test #
All test files are inside /tests folder. API is tested using CodeCeption. You can run test with command "Grunt test" in your console. Make sure you already install grunt first. 


# How REST API Authenticate


Step1: Get Token by send username and password 
    Login
    
    xxxx/users/login
    Get user info that included access-token
    
    Logout
    xxxx/users/logout
   
Step2: Request with access token
    
    xxxxx/blah?access-token=xxxx
    
access-token is that get at step 1


How it work?

1. Disable session

2. Enable authentication method

3. Check token every request at beforeAction() method

check it out at SPBasicAuth

[Rest-rounting](https://github.com/yiisoft/yii2/blob/master/docs/guide/rest-routing.md)
[Rest-Authorization](https://github.com/yiisoft/yii2/blob/master/docs/guide/rest-authentication.md)
