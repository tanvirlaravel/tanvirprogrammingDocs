<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">

<h2>Session</h2>       

    <h3>Intro</h3>
    <div>
    <p>When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.</p>
    <p>Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.</p>
    <p>So Session variables hold information about one single user, and are available to all pages in one application.</p> 
    
    <p>In web development, a session is a way to remember information about a user as they browse a website. Imagine you have a website with a login feature. When a user enters their username and password and logs in, a session is created specifically for that user.</p>

    <p>Think of a session as a special place on the server that keeps track of the user's information while they use the website. It's like having a personal locker in the server where the website can store important things about the user, such as their name, email address, or preferences.</p>
    
    
    <p>An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.</p>
    
   </div>
    <hr>
    <hr>

  
   <h3>How does it work?</h3>
   <div>
    <p>To understand how sessions work, let's walk through a basic overview of the process:</p>
    <ol>
        <li>Session Initialization: When a user visits a website for the first time, the server starts a new session for that user. This is typically done by calling the session_start() function in PHP. The server generates a unique session ID for the user, which is usually a random string.</li>
        <li>Session ID Storage: The server sends the session ID back to the user's browser as a cookie or includes it in the URL. The session ID is stored on the client-side and sent back to the server with each subsequent request. This allows the server to identify and associate the user with their session data.</li>
        <li>Data Storage: As the user interacts with the website, the server can store and retrieve data specific to that user in the session. This data can be accessed using the $_SESSION superglobal array in PHP. The session data can include user information, preferences, shopping cart contents, or any other relevant data.</li>
        <li>Session Tracking: With each request made by the user, the browser sends the session ID back to the server. The server uses this ID to locate and load the corresponding session data. This allows the server to maintain the user's state and provide personalized responses.</li>
        <li>Data Retrieval and Updates: The server can retrieve session data and use it to customize the user's experience. For example, it can display personalized content, remember user settings, or maintain the contents of a shopping cart. The session data can be updated or modified as the user interacts with the website.</li>
        <li>Session Termination: The session remains active as long as the user continues to interact with the website. Once the user logs out, closes their browser, or the session expires (due to inactivity or session timeout), the session is terminated. The session data is cleared, and any user-specific information is removed.</li>
    </ol>
    <p>It's important to note that session data is typically stored on the server-side, ensuring that sensitive information remains secure and inaccessible to the user. The session ID acts as a key to retrieve the corresponding session data on the server.</p>
    <p>By using sessions, websites can provide a personalized and interactive experience for users, remember user-specific information, and maintain stateful interactions in a stateless HTTP protocol.</p>
    <p>Remember to implement appropriate security measures, such as using secure session handling techniques, protecting against session hijacking, and properly configuring session timeout settings, to ensure the integrity and confidentiality of session data.</p>
 

   <p>A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.</p>
    <p>The location of the temporary file is determined by a setting in the php.ini file called session.save_path. Before using any session variable make sure you have setup this path.</p>
   <p>When a session is started following things happen −</p>
   <ul>
        <li>PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as 3c7foj34c3jj973hjkop2fc937e3443.</li>
        <li>A cookie called PHPSESSID is automatically sent to the user's computer to store unique session identification string.</li>
        <li>A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.</li>
   </ul>

   <p>When a PHP script wants to retrieve the value from a session variable, PHP automatically gets the unique session identifier string from the PHPSESSID cookie and then looks in its temporary directory for the file bearing that name and a validation can be done by comparing both values.</p>
 
   <p>Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.</p>
    </div>
    <hr>
    <hr>

   <h3>Turning on Auto Session</h3>
   <div>
   <p>You don't need to call start_session() function to start a session when a user visits your site if you can set session.auto_start variable to 1 in php.ini file.</p>
   </div> 
  <hr>
  <hr>


  <h3> Sessions without cookies</h3>
  <div>
    <p>
    There may be a case when a user does not allow to store cookies on their machine. So there is another method to send session ID to the browser.
Alternatively, you can use the constant SID which is defined if the session started. If the client did not send an appropriate session cookie, it has the form session_name=session_id. Otherwise, it expands to an empty string. Thus, you can embed it unconditionally into URLs.  
    </p>
  </div>






</div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../inc/footer.php'; ?>