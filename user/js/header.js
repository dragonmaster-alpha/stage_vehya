let home = document.querySelector('#home_active');
  let pricing = document.querySelector('#pricing_active');
  let blog = document.querySelector('#blog_active');
  let tax = document.querySelector('#tax_active');
  let application = document.querySelector('#appl_active');
  let about = document.querySelector('#about_active');
  let career = document.querySelector('#career_active');
  
  
  function homeactive(){
    home.classList.add("dot_active");
    pricing.classList.remove("dot_active");
    blog.classList.remove("dot_active");
    tax.classList.remove("dot_active");
    application.classList.remove("dot_active");
    about.classList.remove("dot_active");
    career.classList.remove("dot_active");
    
  }
  function pricingactive(){
    home.classList.remove("dot_active");
    pricing.classList.add("dot_active");
    blog.classList.remove("dot_active");
    tax.classList.remove("dot_active");
    application.classList.remove("dot_active");
    about.classList.remove("dot_active");
    career.classList.remove("dot_active");


  }
  function blogactive(){

    home.classList.remove("dot_active");
    pricing.classList.remove("dot_active");
    blog.classList.add("dot_active");
    tax.classList.remove("dot_active");
    application.classList.remove("dot_active");
    about.classList.remove("dot_active");
    career.classList.remove("dot_active");

  }
  function taxactive(){

    home.classList.remove("dot_active");
    pricing.classList.remove("dot_active");
    blog.classList.remove("dot_active");
    tax.classList.add("dot_active");
    application.classList.remove("dot_active");
    about.classList.remove("dot_active");
    career.classList.remove("dot_active");

  }
  function applactive(){

    home.classList.remove("dot_active");
    pricing.classList.remove("dot_active");
    blog.classList.remove("dot_active");
    tax.classList.remove("dot_active");
    application.classList.add("dot_active");
    about.classList.remove("dot_active");
    career.classList.remove("dot_active");

  }
  function aboutactive(){

    home.classList.remove("dot_active");
    pricing.classList.remove("dot_active");
    blog.classList.remove("dot_active");
    tax.classList.remove("dot_active");
    application.classList.remove("dot_active");
    about.classList.add("dot_active");
    career.classList.remove("dot_active");

  }
  function careeractive(){

    home.classList.remove("dot_active");
    pricing.classList.remove("dot_active");
    blog.classList.remove("dot_active");
    tax.classList.remove("dot_active");
    application.classList.remove("dot_active");
    about.classList.remove("dot_active");
    career.classList.add("dot_active");

  }