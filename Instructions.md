## A. DOCKER DEPLOYMENT STEPS:  
The response container must be created first followed by the display container. $HOST env variable whch is required in display container must be replaced with the name of the host where the docker containers are created.

### PULL THE RESPONSE IMAGE  
`docker pull bshreya639/response:1.0`  

### PULL THE DISPLAY IMAGE
`docker pull bshreya639/display:1.0`

### TO RUN THE RESPONSE CONTAINER  
`docker run --name response -p 8001:80 -d bshreya639/response:1.0`
   
### TO RUN THE DISPLAY CONTAINER  
`docker run --name display -p 8002:80 -e PORT='8001' -e IP='$HOST' -d bshreya639/display:1.0`  

### BROWSER TEST  
1. The response application can be checked at the URL: $HOST:$PORT/response.php (where $HOST and $PORT must be replaced with the host and port where the containers are created).  
2. The display application can be checked at the URL: $HOST:$PORT/display.php (where $HOST and $PORT must be replaced with the host and port where the containers are created).
3. Note: $HOST:$PORT when checked will display sample welcome page (as shown in the screengrabs below)

### DOCKER DEPLOYMENT SCREENGRABS:  
![image](https://github.com/bshreya639/sig/assets/18439044/b23a32e9-7b1a-47d9-b4b6-8a55adb7ce38)  

![image](https://github.com/bshreya639/sig/assets/18439044/b0e4ba56-7bff-48c4-9124-b4fe3f15fcb8)  

![image](https://github.com/bshreya639/sig/assets/18439044/646f9f80-940b-4695-84aa-5393eb9bbb52)  

![image](https://github.com/bshreya639/sig/assets/18439044/a3e9575e-8085-4d28-8570-1222f6e4953b)  

![image](https://github.com/bshreya639/sig/assets/18439044/8f7b3bc2-7d59-48ed-ae45-1078eaa6c91a)  

 

## B. KUBERNETES DEPLOYMENT STEPS:  
The response deployment and service must be created first followed by the display deployment and service.

1. Copy the files from sig/kubernetes_yaml_files to the host where you want to deploy  
2. Create the response deployment  
   `kubectl apply -f response-deployment.yaml`  
4. Create the response service  
   `kubectl apply -f response-service.yaml`  
6. Create the display deployment  
   `kubectl apply -f display-deployment.yaml`  
8. Create the display service  
   `kubectl apply -f display-service.yaml`

### BROWSER TEST  
1. The response application can be checked at the URL: $HOST:$NODEPORT/response.php (where $HOST and $NODEPORT must be replaced with the respective host and nodeport). In our use case, the port 30080 has been already added in the yaml file, so only the host needs to be replaced. 
2. The display application can be checked at the URL: $HOST:$NODEPORT/display.php (where $HOST and $NODEPORT must be replaced with the respective host and nodeport). In our use case, the port 30081 has been already added in the yaml file, so only the host needs to be replaced. 
3. Note: $HOST:$NODEPORT when checked will display sample welcome page (as shown in the screengrabs below).  

### KUBERNETES DEPLOYMENT SCREENGRABS:

   ![image](https://github.com/bshreya639/sig/assets/18439044/8086002c-9159-40f7-9fc4-1a6cfba26f49)

   ![image](https://github.com/bshreya639/sig/assets/18439044/fb943121-bcc3-43b3-860b-67bd28269d7e)

   ![image](https://github.com/bshreya639/sig/assets/18439044/167a54dd-da31-493a-a983-53361c7dcfd0)  

   ![image](https://github.com/bshreya639/sig/assets/18439044/09cf61a3-d807-478d-921a-6805428ea3c1)  

   ![image](https://github.com/bshreya639/sig/assets/18439044/791fc62a-5083-40c9-bbf5-14113ac67d90)  

   ![image](https://github.com/bshreya639/sig/assets/18439044/75b58c35-9789-4594-8824-9c97041ef36e)  

   ### C. SCRIPT DEPLOYMENT STEPS  

   ### PRE-REQUISITES  
   1. Install PHP 7.4 or above
     `apt install php`  
   2. Install apache2 webserver
     `apt install apache2`
   3. The apache2 webserver must be running on port 80
   4. Verify the user www-data is present

   ### NOTE  
   The script is written and deployed through a non root user and hence includes commands with sudo.  

   ### STEPS FOR SCRIPT DEPLOYMENT

   1. Copy the following folder (including all files and subfolders inside) from the repository: script_for_deployment_automation
   2. execute the following from the home directory of your terminal  
     `./script.sh`


   ### VALIDATION AND BROWSER TEST
   1. Check the following files are present in /var/www/html directory:
      * index.php  
      * response.php  
      * display.php
        
   2. The $HOST:80 url shows the index.php
   3. The first application is available at $HOST:80/response.php where $HOST must be replaced with the ip address of the server where the script is deployed.  
   4. The second application is available at $HOST:80/display.php where $HOST must be replaced with the ip address of the server where the script is deployed.  

  ### SCRIPT DEPLOYMENT SCREENGRABS  

  ![image](https://github.com/bshreya639/sig/assets/18439044/5bb06d6e-ab81-40f2-bed4-98476737d51b)  

  ![image](https://github.com/bshreya639/sig/assets/18439044/e3c9ecdc-c812-482d-a005-e44c08c4e14e)  

  ![image](https://github.com/bshreya639/sig/assets/18439044/a9fe5566-b75b-45b0-820f-7a36bb8ed9a1)  



  
  
  
   


   


   




   



