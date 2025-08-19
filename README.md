# Submit to Google Spreadsheet

A simple PHP project that allows users to submit their data via a form and store it directly in a Google Sheet using the Google Sheets API.

## Features

- Submit data (Name, Email) via a web form
- Saves submissions to Google Sheets
- AJAX form submission for a smooth user experience
- Lightweight PHP backend using Google API Client
- Glass-effect form with modern styling

## Prerequisites

- PHP 8+ installed
- Composer installed
- A Google Cloud project with Sheets API enabled
- A **service account** with access to the target Google Sheet

## Setup Instructions

1. Clone the repository:

```bash
git clone https://github.com/your-username/submit-to-google-spreadsheet.git
cd submit-to-google-spreadsheet

2. Install dependencies:

  # bash
  composer install

3. Copy your Google service account JSON file to the project root as service-account.json (make sure this file is not committed).

4. Share your Google Sheet with the service account email. Make sure it has Editor access.

5. Update submit.php with your Google Sheet ID:

  #php
  $spreadsheetId = 'YOUR_SHEET_ID';

6. Start a local PHP server:

  #bash
  php -S localhost:8000

7. Open your browser at http://localhost:8000 and submit the form.

8. Notes

The vendor/ folder and service-account.json are ignored by Git via .gitignore.

Make sure your Google Sheet has columns matching the form inputs (Name, Email).

The form uses AJAX to submit data without reloading the page.

9. Folder Structure
submit-to-google-spreadsheet/
├── index.html         # The HTML form
├── submit.php         # PHP backend for Google Sheets
├── service-account.json # Google service account (ignored in Git)
├── composer.json      # Composer dependencies
├── composer.lock
├── vendor/            # Composer installed packages (ignored in Git)
└── .gitignore

10. License

MIT License

Disclaimer: Never commit your service-account.json to public repositories. Treat it as a sensitive credential.