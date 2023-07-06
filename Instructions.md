## DOCKER DEPLOYMENT STEPS:  
The response container must be created first followed by the display container.

### PULL THE RESPONSE IMAGE  
`docker pull bshreya639/response:1.0`  

### PULL THE DISPLAY IMAGE
`docker pull bshreya639/display:1.0`

### TO RUN THE RESPONSE CONTAINER  
`docker run --name response -p 8001:80 -d bshreya639/response:1.0`
   
### TO RUN THE DISPLAY CONTAINER  
`docker run --name display -p 8002:80 -e PORT='8001' -e IP='10.0.50.108' -d bshreya639/display:1.0`  

### DOCKER DEPLOYMENT SCREENGRABS:  
![image](https://github.com/bshreya639/sig/assets/18439044/b23a32e9-7b1a-47d9-b4b6-8a55adb7ce38)  

![image](https://github.com/bshreya639/sig/assets/18439044/b0e4ba56-7bff-48c4-9124-b4fe3f15fcb8)  

![image](https://github.com/bshreya639/sig/assets/18439044/a3e9575e-8085-4d28-8570-1222f6e4953b)  

    

## KUBERNETES DEPLOYMENT STEPS:  
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

## KUBERNETES DEPLOYMENT SCREENGRABS:

   ![image](https://github.com/bshreya639/sig/assets/18439044/8086002c-9159-40f7-9fc4-1a6cfba26f49)

   ![image](https://github.com/bshreya639/sig/assets/18439044/fb943121-bcc3-43b3-860b-67bd28269d7e)

   ![image](https://github.com/bshreya639/sig/assets/18439044/167a54dd-da31-493a-a983-53361c7dcfd0)

   ![image](https://github.com/bshreya639/sig/assets/18439044/791fc62a-5083-40c9-bbf5-14113ac67d90) 




   



