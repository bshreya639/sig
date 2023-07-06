# Overview
## Repository Contents:
1. application_1_response: This folder contains the source code used to implement the software for task 1. The application has been named response. The files are shared just to look at the code.
2. application_1_display: This folder contains the source code used to implement the software for task 4. The application has been named display. The files are shared just to look at the code. The $url variable in this file has been allocated a sample value and should not be actually executed.
3. docker_deployment files: This folder contains everything required to create the containers for the response and display applications. This is related to task 2.
4. kubernetes_yaml_files: This folder contains everything required to create the deployments for the response and display applications in a sample kubernetes cluster. This is related to task 3.
5. script_deployment: This folder contains everything required to execute the script deployment. This is related to task 5.

## TASK 8
### Clarity of the instructions: 
Overall understandable, The solutions I have created were to the best of my understanding ((My assumption): There are 3 different deployments, one through docker, one through kubernetes and one through script.)), however it would be helpful if the following should be made more clear in the instructions:
* The second application should also be dockerized
* Both the applications should be deployed on the Kubernetes cluster
*  Perhaps the order of the instructions could be changed, such as task 4 should be task 2, and tasks 2 and 3 should be 3 and 4 along with joint instructions for docker and kubernetes.

### Difficulty Level of the Challenge
I would say medium, not very easy but also not very difficult. For a time period of 1 week, I would say it is apt.

### Technologies, Tools and Approaches used

2 servers which are Ubuntu 20.04 based VMs (1st used for script and docker deployment and the 2nd for Kubernetes deployment)
The applications are implemented using PHP and apache webserver
Docker Engine is installed through apt repository of Ubuntu. The docker images use a parent image of php:apache and the final images have been uploaded to dockerhub
Kubernetes deployment is implemented through MicroK8s (https://microk8s.io/)

### Any areas you found particularly challenging or frustating

The Kubernetes deployment was frustrating for me at the beginning as I had been using minikube to deploy it. There was continuous issues and somehow the configuration was just not working inspite of retrying multiple times when finally I decided to use a different platform. A large amount of my time was consumed in troubleshooting minikube deployments.

### Suggestions on improvement
A database component can be added to the challenge, as most real world scenarios in production involves a database. Perhaps something with CRUD operations.

