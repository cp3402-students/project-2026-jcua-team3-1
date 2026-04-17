## How to Add and Edit Content
Content on this site is managed through the WordPress dashboard.
### To edit existing pages:
1. Navigate to **Pages > All Pages**  
2. Select the page you want to edit  
3. Use the Block Editor (Gutenberg) to update content  
4. Click **Update** to save changes  

### To add new pages:
1. Go to **Pages > Add New**
2. Enter a page title and content
3. Use blocks (headings, paragraphs, images, buttons, etc.)
4. Click **Publish**

### Important Notes:
- Use consistent headings (H2, H3) for structure  
- Maintain formatting consistency (spacing, alignment, colours)  
- Avoid editing core theme files unless necessary  

## Pages vs Posts

### Pages
- Used for static content  
- Examples:
  - Home  
  - Hire  
  - Contact  
- Organised via the navigation menu  

### Posts
- Used for dynamic or blog-style content  
- Not heavily used in this project  
- Suitable for:
  - News updates  
  - Events  
  - Announcements  

This site primarily uses **Pages**, not Posts.


## Categories / Content Structure

The site is structured around key service areas:

### Main Sections:
- Home  
- Hire  
  - Court Hire  
  - Event Hire  
  - Party Hire  
- Contact / Location  

### Navigation:
- Dropdown menus are used for sub-sections (e.g. Hire > Courts, Events, Parties)  
- Anchor links (#courts, #events, #parties) are used within pages for navigation  

### Content Layout:
- Content is organised using:
  - Sections with headings  
  - Card-style layouts  
  - Consistent spacing and alignment  


## Plugin-Specific Processes

### Plugins
- Plugins can be accessed via **Plugins > Installed Plugins**
- Settings are typically found under:
  - **Settings menu**
  - Or plugin-specific menu item in the dashboard  

### Important Notes:
- Avoid installing unnecessary plugins (performance + security)  
- Always test plugin changes on the staging site first 

## Site-Specific Organisation

### Development Workflow:
- Local Development: Local by Flywheel  
- Staging Server: Google Cloud  
- Production Server: AWS LightSail  

### GitHub Workflow:
- main → Production  
- staging → Testing  
- local-* → Development  

### Deployment:
- Changes pushed to GitHub automatically deploy to staging using GitHub Actions  
- Production updates only occur after team approval  

### Styling:
- Custom theme built using Underscores  
- Styling managed via:
  - SCSS files (modular components)  
  - Compiled into `style.css`  

### Navigation:
- Managed via **Appearance > Menus**  
- Dropdown items link to anchor sections within pages  

## Important Guidelines
- Always test changes locally or on staging before production  
- Do not edit core theme files directly unless necessary  
- Keep styling consistent with the existing design system  
- Use GitHub for version control, avoid editing live files directly  