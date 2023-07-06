KUBERNETES DEPLOYMENT STEPS:

1. Copy the files from sig/kubernetes_yaml_files to the host where you want to deploy
2. Create the response deployment
   kubectl apply -f response-deployment.yaml
4. Create the response service
   kubectl apply -f response-service.yaml
6. Create the display deployment
   kubectl apply -f display-deployment.yaml
8. Create the display service
   kubectl apply -f display-service.yaml

   DEPLOYMENT SCREENGRABS:

   ![image](https://github.com/bshreya639/sig/assets/18439044/8086002c-9159-40f7-9fc4-1a6cfba26f49)

   ![image](https://github.com/bshreya639/sig/assets/18439044/fb943121-bcc3-43b3-860b-67bd28269d7e)

   ![image](https://github.com/bshreya639/sig/assets/18439044/167a54dd-da31-493a-a983-53361c7dcfd0)

   ![image](https://github.com/bshreya639/sig/assets/18439044/791fc62a-5083-40c9-bbf5-14113ac67d90) 




   



