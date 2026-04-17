# CP3402 Group Project: Redesign the Website for Kalynda Chase Tennis Blast

## Deployment Process: Staging Server to Production Server (All-in-One WP Migration)

The website was migrated from the staging server to the production server using the All-in-One WP Migration plugin. This process ensured that all website content, themes, plugins, and settings were transferred correctly

### Step 1: Export from Staging Server
On the staging site, the All-in-One WP Migration plugin was installed and activated. The export tool was used to create a full backup of the WordPress site, including the media files, themes, and plugins. The export file was downloaded locally once the process was completed

### Step 2: Prepare Production Server
On the production server, a new WordPress installation was set up. The same All-in-One WP Migration plugin was installed and activated to ensure the production server was compatible with the exported backup file.

### Step 3: Import to Production Server
Using the plugin's import feature, the previously downloaded backup file was uploaded to the production server. The plugin automatically replaced content on the staging server.

### Step 4: Final Verification
After the import completed, the WordPress site was checked to ensure all pages, media and theme settings were correctly transferred. 


## Deployment Process: Staging Server to Production Server (GitHub Automated Deployment)
The website was deployed from the staging server to the production server using an automated delpoyment process with GitHub Actions. This process used GitHub Actions and repository variables to automatically build and deploy the latest version of the code from the main branch to the production server.

### Step 1: Commit and Push from Staging Server
Changes made on the staging server were committed and pushed directly to the main branch on GitHub, so the GitHub repository contained the latest version of the website and was ready for deployment to the production server.

### Step 2: Automated Workflow Trigger
A GitHub Actions workflow was configured to automatically trigger when changes weer pushed to the main branch. This workflow shows the steps need to automatically deploy the updated website to the production server. 

### Step 3: Repository Variables and Secrets
Sensitive information such as server credentials and deployment plaths were securely stored using GitHub repository secrets and variables. These were accessed during the workflow to securely connect to the production server.

### Step 4: Automated deployment to Production Sever
The workflow automatically transferred the latest code from the main branch to the production server, updating the live production WordPress site to match the most recent changes made in the repository.

### Step 5: Deployment Verification
After deployment, the production site was reviewed to confirm that the latest changes had been successfully applied and that all features were functioning correctly.
