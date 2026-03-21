<?php
// Contact Component (Container layout)
?>
<style>
    .contact-section {
        background-color: #ffffff;
        color: #333333;
        padding: 80px 0; 
        font-family: 'Poppins', 'Inter', sans-serif;
    }
    
    .map-container {
        height: 100%;
        min-height: 450px;
        width: 100%;
        background-color: #f0f0f0;
        border-radius: 12px; /* Professional rounded corners */
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05); /* Subtle elegant shadow */
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        min-height: 450px;
        border: 0;
    }
    
    .form-container {
        padding: 15px 15px 15px 40px; /* Added left padding to separate from map */
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        background-color: #ffffff;
    }
    
    .form-container h3 {
        color: #f96302; /* Orange text as per image */
        margin-bottom: 30px;
        font-weight: 700;
        font-size: 32px;
    }
    
    .form-control {
        border-radius: 6px; 
        padding: 15px 20px;
        margin-bottom: 22px;
        border: 1px solid #e0e0e0; /* Softer border */
        background-color: #fcfcfc; /* Very light subtle background */
        color: #333333;
        transition: border-color 0.3s, box-shadow 0.3s;
    }
    
    .form-control::placeholder {
        color: #999999;
    }

    .form-control:focus {
        border-color: #f96302;
        box-shadow: 0 0 0 0.2rem rgba(249, 99, 2, 0.15);
        background-color: #ffffff;
        outline: none;
    }
    
    .btn-submit {
        background-color: #051b60; /* Dark blue button */
        color: #ffffff;
        padding: 16px 0;
        font-weight: 700;
        font-size: 16px;
        border-radius: 6px;
        border: none;
        width: 100%;
        transition: background-color 0.3s, transform 0.2s;
        margin-top: 5px;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }
    
    .btn-submit:hover {
        background-color: #f96302; /* Orange hover */
        transform: translateY(-2px);
    }
    
    /* Mobile & Tablet Adjustments */
    @media (max-width: 991px) {
        .form-container {
            padding: 40px 15px 20px;
        }
        .map-container {
            min-height: 350px;
        }
        .map-container iframe {
            min-height: 350px;
        }
    }
</style>

<section class="contact-section">
    <!-- Changed to a standard container to box the content nicely -->
    <div class="container">
        <!-- Added a gap between columns for breathing room -->
        <div class="row g-5 align-items-center">
            
            <!-- Location / Map Column -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="map-container">
                    <iframe 
                        src="https://maps.google.com/maps?cid=13445006132243978412&hl=en&gl=IN&output=embed" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Foundation Location Map">
                    </iframe>
                </div>
            </div>
            
            <!-- Contact Form Column -->
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="form-container">
                    <h3>Send Us A Message</h3>
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Subject" required>
                        <textarea class="form-control" rows="6" placeholder="Write your message here..." required></textarea>
                        <button type="submit" class="btn-submit">SUBMIT MESSAGE</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
