# Universal Access Roles
As initiating the user registration, the standard level of credibility should be lower to USER/GUEST and not higher than ADMIN.

### 🤖 Table of roles
| Role | Description | Access Level |
|------|-------------|--------------|
| User | Can only view resources | Read |
| ICAO | Can upload conference documents and review registrants | Read/Write |
| Media | Can create news articles and upload to the main page | Read/Write/Delete |
| Admin | Can view, write and delete existing resources | Read/Write/Delete |

## Users / Guest
``url/``
<br>
This role is for individuals who are visiting your site. They have the ability to view resources, but they cannot modify or delete any content. This is the default role for anyone who visits the site without logging in.

Restrictions: ``Pending/Approved`` Status

## ICAO
``url/icao``
<br>
This role is for members of the International Civil Aviation Organization. They have the ability to upload conference documents and review registrants. This means they can add new content to the site and also view details of individuals who have registered for conferences.

## Media
``url/media``
<br>
This role is for media personnel. They have the ability to create news articles and upload them to the main page. This means they can add and delete content related to news articles. They also have the ability to modify existing articles.

## Admin
``url/admin``
<br>
This role is for administrators of the site. They have full access to all resources, meaning they can view, add, modify, and delete any content on the site. This role should be limited to a small number of trusted individuals, as it gives a lot of power over the site's content.
