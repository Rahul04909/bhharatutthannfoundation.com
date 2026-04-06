<style>
    .contact-section-full {
        padding: 0;
        margin: 0;
        width: 100%;
        overflow: hidden;
        font-family: 'Poppins', 'Inter', sans-serif;
    }
    
    .contact-map-block {
        padding: 0;
        min-height: 600px;
        position: relative;
    }
    
    .contact-map-block iframe {
        width: 100%;
        height: 100%;
        min-height: 600px;
        border: 0;
        display: block;
    }
    
    .contact-form-block {
        background-color: #051b60; /* Foundation Dark Blue */
        color: #ffffff;
        padding: 80px 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }
    
    .contact-info-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 40px;
    }
    
    .info-pill {
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(255, 255, 255, 0.05);
        padding: 10px 18px;
        border-radius: 50px;
        font-size: 14px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    
    .info-pill i {
        color: #f96302; /* Theme Orange */
        font-size: 18px;
    }
    
    .info-pill:hover {
        background: rgba(249, 99, 2, 0.1);
        border-color: #f96302;
    }

    .contact-form-block h2 {
        font-weight: 800;
        font-size: 36px;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .contact-form-block p.subtitle {
        color: #f96302;
        font-weight: 600;
        margin-bottom: 35px;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 2px;
    }
    
    .custom-form-group {
        margin-bottom: 25px;
    }
    
    .custom-input {
        background-color: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 8px;
        padding: 18px 25px;
        color: #ffffff;
        width: 100%;
        transition: all 0.3s ease;
    }
    
    .custom-input:focus {
        background-color: rgba(255, 255, 255, 0.1);
        border-color: #f96302;
        outline: none;
        box-shadow: 0 0 15px rgba(249, 99, 2, 0.2);
    }
    
    .btn-contact-submit {
        background-color: #f96302;
        color: #ffffff;
        padding: 18px 40px;
        font-weight: 700;
        border-radius: 8px;
        border: none;
        width: 100%;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        margin-top: 10px;
        box-shadow: 0 10px 20px rgba(249, 99, 2, 0.2);
    }
    
    .btn-contact-submit:hover {
        background-color: #ffffff;
        color: #051b60;
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    /* Mobile handling */
    @media (max-width: 991px) {
        .contact-form-block {
            padding: 60px 30px;
        }
        .contact-map-block {
            min-height: 400px;
        }
        .contact-map-block iframe {
            min-height: 400px;
        }
    }
</style>

<section class="contact-section-full">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">
            
            <!-- Map Column -->
            <div class="col-lg-6">
                <div class="contact-map-block">
                    <iframe 
                        src="https://maps.google.com/maps?cid=13445006132243978412&hl=en&gl=IN&output=embed" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <!-- Enhanced Form Column -->
            <div class="col-lg-6">
                <div class="contact-form-block">
                    <p class="subtitle">Get In Touch</p>
                    <h2>Contact Us</h2>
                    
                    <!-- Quick Contact Pills -->
                    <div class="contact-info-pills">
                        <div class="info-pill">
                            <i class="fa-solid fa-phone"></i>
                            <span>+91 94151 51318</span>
                        </div>
                        <div class="info-pill">
                            <i class="fa-solid fa-envelope"></i>
                            <span>bhharatutthannfoundation@gmail.com</span>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 custom-form-group">
                                <input type="text" class="custom-input" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6 custom-form-group">
                                <input type="email" class="custom-input" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="custom-form-group">
                            <input type="text" class="custom-input" placeholder="Interested In (e.g. Donation, Volunteering)" required>
                        </div>
                        <div class="custom-form-group">
                            <textarea class="custom-input" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn-contact-submit">Send Message Now</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
