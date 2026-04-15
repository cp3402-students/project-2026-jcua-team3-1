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