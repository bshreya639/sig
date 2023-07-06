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

   ![image](https://github.com/bshreya639/sig/assets/18439044/c034c26e-d7a6-4e2d-a50e-0fa192a8840e)

   



