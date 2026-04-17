# CP3402 Group Project: Redesign the Website for Kalynda Chase Tennis Blast

## 1. Introduction

### 1.1 Purpose
This document provides technical details of the staging serer used fro the developments and testing of the Kalynda Chase Tennis Blast website. It serves as a reference fro developers, system adminstrators and future maintainers to understand the staging infrastructur and configuration used prior to the production server.

### 1.2 Intended Audience
- System Administrators  
- Developers  
- Maintenance Teams  

### 1.3 Technologies Used

| Component           | Technology                    |
|---------------------|-------------------------------|
| Cloud Hosting        | Google Cloud Pltaform (GCP)  |
| Compute Service      | Compute Engine (VM Instance) |
| Operating System     | Linux (Ubuntu)               |
| Web Server           | Apache                       |
| Database             | MariaDB                      |
| Programming Language | PHP, HTML, CSS, SCSS         |
| Application          | Apache                       |


## 2. Infrastructure Used

### 2.1 Google Cloud Configuration

| Configuration Item     | Details                                 |
|------------------------|-----------------------------------------|
| AWS Region             | N. Virginia (us-east1)                  |
| Zone                   | us-east1-c                              |
| Instance Type          | e2-micro                                |
| CPU                    | 2 vCPUs                                 |
| Memory                 | 1GB RAM                                 |
| Storage                | 10GB                                    |
| Networking             | External IP enabled; HTTP/HTTPS allowed |
| Public/Private IPs     | See System Administrator                |
| Admin Credentials      | See System Administrator                |

### 2.2 Network and Security

| Port | Protocol | Service       | Access Level | Description                     |
|------|----------|---------------|--------------|---------------------------------|
| 22   | SSH      | Secure Shell  | Restricted   | Remote server access            |
| 80   | HTTP     | Web Traffic   | Public       | Staging site access             |
| 443  | HTTPS    | Secure Web    | Optiona;     | Encrypted traffic (9if enabled) |


### 2.3 WordPress Staging Configuration

| Configuration Item | Details                                         |
|--------------------|-------------------------------------------------|
| WordPress Version  | 6.9.4                                           |
| Installation Type  | Manual LAMP stack installation on Ubunutu 22.04 |
| Database           | MariaDB                                         |
| Admin Access       | See System Administrator                        |

**Installed Components**
- WordPress installed manually on the Virtual Machine (VM)
- Apache set up as the web server
- PHP installed for WordPress support
- MariaDB used for the database
- SSH configured for secure server access

**Plugins Used:**
- All-in-One WP Migration – Full backups  
- Accessibility Widget by OneTap  


### 2.4 Github Synchronization (Staging Server Deployment)
- Retrieve the Google Cloud VM external IP address, SSH username, and SSH private key from the GCP Compute Engine instance.
- In the GitHub repository, naviaget to Settings &rarr; Secrets and Variables &rarr; Actions.
- Add the following reposiory secrets:
  - `GCP_HOST`: External IP address of the Google Cloud VM  
  - `GCP_USER`: SSH username for the VM  
  - `GCP_SSH_KEY`: Private SSH key for server access
  - `GCP_PORT`: SSH port (default: 22)

- Create a GitHub Actions workflow file called `deploy.yml` and configure it as follows:

```yaml
name: Deploy WordPress Theme to GCP

on:
  push:
    branches: [staging]

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      # 1. Checkout repository code
      - name: Checkout repo
        uses: actions/checkout@v4

      # 2. Set up SSH access
      - name: Setup SSH
        run: |
          mkdir -p ~/.ssh
          echo "${{ secrets.GCP_SSH_KEY }}" > ~/.ssh/id_rsa
          chmod 600 ~/.ssh/id_rsa
          ssh-keyscan -H ${{ secrets.GCP_HOST }} >> ~/.ssh/known_hosts

      # 3. Deploy theme to staging server
      - name: Deploy files to server
        run: |
          rsync -avz --delete \
            -e "ssh -i ~/.ssh/id_rsa" \
            ./ \
            ${{ secrets.GCP_USER }}@${{ secrets.GCP_HOST }}:/var/www/html/wp-content/themes/tennis-blast/

