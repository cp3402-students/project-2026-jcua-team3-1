Explain your development and deployment workflow as a clear set of instructions so that a new team member could follow it:



# Local Environment Setup

## Fork and Clone the Repo

Create a fork of the [github repo](https://github.com/cp3402-students/project-2026-jcua-team3-1)

Open your terminal 

Navigate to where you want to store the Local WordPress site using the CLI

run <code>git clone (replace with your forked repository URL) </code> to clone the repo to your chosen directory

## Installing Local By Flywheel

Download the latest version of Local for your specific Operating System from [Local Releases](https://localwp.com/releases/).

Install the application and follow the prompts.

Open Local and create a new blank WordPress site. 

Enter a site name <code>3402-A2</code>

Set the Local site path to 
> The directory where you cloned your GitHub repository files.

You may encounter an error where it says it will overright some files. Ignore it

Use preferred enviroment

Set both wordpress username and password to <code>user</code>

finish creating the site.

Allow any popups


## How changes are made and committed
Changes are developed locally using a WordPress environment managed through Local by Flywheel. All development work is done on the local-branch using Git version control.

To make changes, follow these steps:
- Open the `tennis-blast` theme folder in Visual Studio Code
- Make the required changes to the theme files
- Refresh and test the changes in the local WordPress front-end to ensure they display correctly
- Fix any issues if the changes do not appear as expected before proceeding

Once changes are ready, they are committed and pushed to GitHub using the following commands:
```bash
git status
git add tennis-blast/
git commit -m "Describe the changes made"
git push origin local-branch
```
This ensures all updates are tracked and shared with the team through the central repository


## How changes are tested
Open the local WordPress sit running in Local by Flywheel

Go to the relevant page or feature in the front-end that has been changed

Refresh the page after making changes in the theme files to load the latest version

Check that the layout, styling and functionality match the anticipated design

Verify that there are no layout errors, missing elements, or console errors in the brower

If there are any errors that are found, return to the `tennis-blast` themes folder in Visual Studio Code, make corrections,, and repeat the testing process locally before committing changes

## Deployment to staging

### 1. GitHub Repository Setup
- Open the GitHub repository 
- Go to Settings &rarr; Secrets and Variables &rarr; Actions
- Add the required secrets:
  - `GCP_HOST`: External IP address of the Google Cloud VM  
  - `GCP_USER`: SSH username for the VM  
  - `GCP_SSH_KEY`: Private SSH key for server access
  - `GCP_PORT`: SSH port (default: 22)

### 2. GitHub Actions Workflow Setup
- Create a workflow file in the repository:
  - `.github/workflows/deploy.yml`
- Then add the following configuration:
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
```
- Configure the workflow to run when changes are pushed to the staging branch
- The workflow performs the following steps:
  - Checks out the latest repository code
  - Set up SSH access using GitHub Secrets
  - Adds the staging server to known hosts
  - Deploys files to the Google Cloud VM using `rsync`

### 3. Automated Deployment Process
- When changes are pushed to the `staging` branch:
  - GitHub Actions automatically triggers the workflow
  - The repository is cloned within the GitHub Actions environment
  - SSH authentication is configured securely using secrets
  - A secure connection is established to the staging server
  - Files are synchronised to the server directory
    - `/var/www/html/wp-content/themes/tennis-blast/`
  - The staging website is updated to reflect the latest code

### 4. Result
- The staging server is automatically updated from the staging branch
- No manual server file transfers required
- All deployments are consitent and repeatable

## Deployment to production


## Integration of project management and communication tools
The project used GitHub for version control and collaborative development. All code changes were managed through branches and pull requests, allowing team members to review and approve updates before merging into the main codebase. This ensured consistency and reduced conflicts during development.

Trello was used as the primary project management tool to organise tasks and track progress. Tasks were created, assigned to team members, and moved through different stages such as “To Do,” “In Progress,” and “Done.” This provided clear visibility of project status and helped distribute workload evenly across the team.

Communication was managed through Slack and a Discord group chat, which were used for day-to-day coordination, quick updates, and troubleshooting. In addition, scheduled team meetings were held on Discord outside of university sessions to discuss progress, resolve issues, and plan upcoming tasks.

Overall, the combination of GitHub for development, Trello for task management, and Slack/Discord for communication ensured effective collaboration sithin the team.

# Other

Deployment to production



Do not reproduce official WordPress or Docker documentation.
