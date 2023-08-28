# Event-Link-Redirector
This PHP code represents a web page that takes the input "url" from query string parameters and modifies it before redirecting to a new URL with additional parameters. The overall structure and functionality of the code can be described as follows:

1. Getting the "url" Parameter from Query String:
   The code uses `$_GET['url']` to retrieve the "url" parameter from the query string.

2. Parsing URL Components:
   The `parse_url($url)` function is used to parse various components of a URL, including the "scheme" (http or https), "host" (domain), and "path" (path).

3. Removing "http://" or "https://":
   If the "scheme" includes "http://" or "https://", the code removes this prefix, ensuring that the remaining URL starts with the domain.

4. Adding "https://" Prefix:
   If the "scheme" is not defined or is empty, a default "https" scheme is added.

5. Adding UTM Parameters:
   An array of UTM parameters (utm_source, utm_medium, utm_campaign) is defined.

6. Combining UTM Parameters with Current Query String:
   If the "query" parameter exists in the URL, the UTM parameters are added to the existing query string. Otherwise, a new query string is created with the UTM parameters.

7. Creating a New URL:
   Using the modified URL components and the new query string, a new URL is constructed.

8. Defining HTML Page:
   An HTML page is defined, including settings related to metadata, styles, and associated scripts.

9. Setting Meta Tag for Redirect:
   A `<meta>` tag is added to the HTML page, specifying that the user will be redirected to the new URL after 10 seconds.

10. Displaying Information on the Page:
    In this section, information related to the redirection is displayed on the page. Additionally, a button with a link to the new URL is shown.

The code also employs various fonts and icons to enhance the visual appearance of the page. When using this code on GitHub or other platforms, you would need to save the required style files, icons, and other resources along with the code. Additionally, keep in mind that it's recommended to implement security measures such as input validation and filtering to ensure data safety.




