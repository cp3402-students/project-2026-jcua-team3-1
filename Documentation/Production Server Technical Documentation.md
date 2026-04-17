# CP3402 Group Project: Redesign the Website for Kalynda Chase Tennis Blast

## 1. Introduction

### 1.1 Purpose
This document presents detailed technical information to support the redevelopment of the Tennis Blast website. It functions as a reference for administrators, developers and future maintainers involved in the website’s ongoing management and evolution.


### 1.3 Intended Audience
- System Administrators  
- Developers  
- Maintenance Teams  

### 1.4 Technologies Used

| Component           | Technology             |
|---------------------|------------------------|
| Cloud Hosting       | AWS LightSail          |
| Operating System    | Linux (Bitnami Stack)  |
| Web Server          | Apache                 |
| Programming Language| PHP, HTML, CSS, SCSS   |



## 2. Infrastructure Used

### 2.1 AWS LightSail Configuration

| Configuration Item     | Details                          |
|------------------------|----------------------------------|
| AWS Region             | Sydney, Zone A (ap-southeast-2a) |
| Instance Type          | General                          |
| CPU                    | 2 vCPUs                          |
| Memory                 | 2GB                              |
| Storage                | 60GB SSD                         |
| Networking             | Dual Stack                       |
| Public/Private IPs     | See System Administrator         |
| Admin Credentials      | See System Administrator         |

**Note:** SSL is not configured due to no hosting domain being used.




### 2.2 Network and Security

| Port | Protocol | Service       | Access Level | Description            |
|------|----------|---------------|--------------|------------------------|
| 22   | SSH      | Secure Shell  | Restricted   | Remote administration  |
| 80   | HTTP     | Web Traffic   | Public       | Non-secure access      |
| 443  | HTTPS    | Secure Web    | Public       | Encrypted SSL/TLS      |



### 2.3 WordPress LightSail Configuration

| Configuration Item | Details                      |
|------------------|------------------------------|
| WordPress Version| 6.9.4                         |
| Admin Access     | See System Administrator      |

**Plugins Used:**
- All-in-One WP Migration – Full backups  
- Accessibility Widget by OneTap  



### 2.4 Github Synchronization (to configure for first-time use)

- Retrieve admin username and SSH key and server IP address from AWS LightSail server.  
- In the Github repository, open Secrets and Variables.  
- Enter the following information under repository secrets:  
  - `LIGHTSAIL_HOST`: HOST IP Address of LightSail server  
  - `LIGHTSAIL_USER`: WordPress Admin username  
  - `SSH`: The SSH key from the LightSail server  

- Add a `deploy.yml` file to the repo and add the following:

```yaml
- name: Deploy to Lightsail via SSH
  uses: appleboy/ssh-action@v1.0.3
  with:
    host: ${{ secrets.LIGHTSAIL_HOST }}
    username: SEE System Administrator
    key: ${{ secrets.LIGHTSAIL_SSH_KEY }}
    script: |
      cd /opt/bitnami/wordpress/wp-content/themes/tennis-club
      git pull origin main

      sudo chown -R bitnami:daemon /opt/bitnami/wordpress/wp-content/themes/tennis-club
