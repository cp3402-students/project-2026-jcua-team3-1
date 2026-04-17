## Theme Features

- Custom WordPress theme built using the Underscores (_s) starter template  
- Fully responsive layout using flexbox and modular SCSS  
- Custom navigation system:  
  - Dropdown menu for “Hire” section  
  - Anchor-based navigation within pages (e.g. #courts, #events, #parties)  
- Styled footer with:  
  - Three-column layout (Office Hours, Contact, Location)  
  - Embedded Google Maps integration  
- Reusable UI components:  
  - Cards for content sections  
  - Buttons and call-to-action links  
- Consistent colour system:  
  - Primary blue (#009ad6) for header/footer  
  - Neutral background (#f9f9f9)  
  - Black/blue text for readability  

## Key Files and Structure

### Theme Root
- style.css → Compiled CSS (final output, do not edit directly if using SCSS)  
- functions.php → Enqueues styles/scripts and theme setup  
- header.php → Site header and navigation markup  
- footer.php → Footer layout and content  
- index.php, page.php, single.php → Template files  

### SCSS Structure (Located in `/sass/`)
- style.scss → Main SCSS entry point  

#### abstracts/
- _colors.scss → Colour variables  

#### components/
- _header.scss  
- _navigation.scss  
- _footer.scss  
- _buttons.scss  
- _cards.scss  

SCSS is compiled into `style.css`

## Conventions Used

- BEM-like naming approach for clarity (e.g. `.footer-container`, `.footer-column`)  
- Modular SCSS structure: each UI component has its own file  
- Colours are defined using variables in `_colors.scss`  
- Layout uses Flexbox for structure and consistent spacing  
- Navigation uses WordPress menu classes (`.menu-item-has-children`)  
- Anchor navigation uses section IDs for internal linking  

## Important Design Decisions

- Underscores starter theme used as a base for flexibility and minimal bloat  
- SCSS used instead of plain CSS for maintainability and modularity  
- Three-environment workflow (Local → Staging → Production) to prevent breaking live site  
- Custom navigation system instead of default WordPress styling for improved UX  
- Footer designed as a three-column layout for clarity and usability  
- Google Maps embedded using iframe to reduce API complexity  

## Non-Obvious / Important Notes

- `style.css` is generated from SCSS — changes should be made in SCSS files  
- WordPress default styles (from Underscores) may override custom styles if not handled correctly  
- Navigation dropdown depends on correct WordPress menu structure and `_navigation.scss`  
- Anchor links require matching IDs in page content (e.g. `#courts`, `#events`)  
- Some layout issues (e.g. block editor grid conflicts) were resolved by avoiding global overrides of:
  - `.wp-block-columns`  
  - `.wp-block-group`  
- Google Maps embed zoom must be adjusted via Google Maps, not manually in code  
- Deployment workflow relies on GitHub — avoid editing production files directly  

## Developer Handover Tips

- Always work in local or staging environment first  
- Use SCSS files instead of editing compiled CSS  
- Test navigation and anchor links after structural changes  
- Keep styling consistent with existing colour and layout system  
- Use GitHub branches for new features or fixes  

## Outcome

This theme is designed to be:
- Modular  
- Maintainable  
- Easy to extend  

A developer taking over should be able to:
- Locate components quickly  
- Modify styles safely  
- Extend functionality without breaking existing features  