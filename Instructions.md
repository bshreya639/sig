## DOCKER DEPLOYMENT STEPS:

### PULL THE RESPONSE IMAGE  
    `docker pull bshreya639/response:1.0`  

### PULL THE DISPLAY IMAGE
    `docker pull bshreya639/display:1.0`

### TO RUN THE RESPONSE CONTAINER  
   `docker run --name response -p 8001:80 -d bshreya639/response:1.0`
   
### TO RUN THE DISPLAY CONTAINER  
   `docker run --name display -p 8002:80 -e PORT='8001' -e IP='10.0.50.108' -d bshreya639/display:1.0`
      

## KUBERNETES DEPLOYMENT STEPS:

1. Copy the files from sig/kubernetes_yaml_files to the host where you want to deploy  
2. Create the response deployment  
   `kubectl apply -f response-deployment.yaml`  
4. Create the response service  
   `kubectl apply -f response-service.yaml`  
6. Create the display deployment  
   `kubectl apply -f display-deployment.yaml`  
8. Create the display service  
   `kubectl apply -f display-service.yaml`    

DEPLOYMENT SCREENGRABS:

   ![image](https://github.com/bshreya639/sig/assets/18439044/8086002c-9159-40f7-9fc4-1a6cfba26f49)

   ![image](https://github.com/bshreya639/sig/assets/18439044/fb943121-bcc3-43b3-860b-67bd28269d7e)

   ![image](https://github.com/bshreya639/sig/assets/18439044/167a54dd-da31-493a-a983-53361c7dcfd0)

   ![image](https://github.com/bshreya639/sig/assets/18439044/791fc62a-5083-40c9-bbf5-14113ac67d90) 




   



