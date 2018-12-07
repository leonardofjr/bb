    <form method="POST" action="/contact" class="mr-auto ml-auto py-4 contact-form">
        {{ csrf_field() }} 
        <div class="form-group">
            <input class="form-control" type="text" name="contactFormName" placeholder="Name"/>
        </div>
       <div class="flash-message-contact-form-name alert alert-info d-none">
           <span></span>
        </div>  
        <div class="form-group">
            <input class="form-control" type="text" name="contactFormEmail" placeholder="Email Address"/>
        </div>
        <div class="flash-message-contact-form-email alert alert-info d-none">
            <span></span>
        </div>  
        <div class="form-group">
            <textarea class="form-control" type="text" name="contactFormMessage" placeholder="Leave Your Message"></textarea>
        </div>
        <div class="flash-message-contact-form-message alert alert-info d-none">
            <span></span>
        </div> 
        <button class="btn btn-primary" type="submit">Send It Now</button>
          <div class="flash-message-contact-form-success alert alert-info d-none">
            <span>Your inquiry has been submitted</span>
        </div> 
    </form>