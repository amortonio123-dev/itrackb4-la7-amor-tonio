 ITRACKB4 LA7 - Movie Application

 Q1. Why does the form use POST instead of GET?

The form uses POST because it is sending data that will be saved as a new movie. If GET was used, the submitted information would become part of the URL and the browser could repeat the request when the page is refreshed. This could cause the same movie to be saved again. POST with redirect helps avoid that problem.

 Q2. What stops the save when validation fails?

The `$request->validate()` method checks the submitted values before the save code continues. When a rule fails, Laravel automatically stops the controller at that point and redirects the visitor back to the form with the validation errors and old input. Because the code after validation is not reached, the movie is not saved.

 Q3. Why does the success message only appear once?

The success message is stored in the session using `with('success', ...)` when the movie is saved. The layout checks the session and displays the message because the layout is loaded on every page. However, the session message is temporary, so after it is read, it does not keep appearing when the visitor goes to another page.
