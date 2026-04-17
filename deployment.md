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

set both wordpress username and password to <code>user</code>

finish creating the site.

Allow any popups


## How changes are made and committed
Changes are developed locally using a WordPress environment managed through Local by Flywheel. All development work is done on the local-branch using Git version control.

To make changes, developers update the theme files in the local environment and verify changes in the WordPress front-end

Once changes are ready, they are committed and pushed to GitHub using the following commands:
```bash
git status
git add tennis-blast/
git commit -m "Describe the changes made"
git push origin local-branch
```
This ensures all updates are tracked and shared with the team through the central repository


# Other

How changes are tested



Deployment to staging



Deployment to production



Integration of project management and communication tools



Do not reproduce official WordPress or Docker documentation.
