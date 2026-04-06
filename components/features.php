<style>
    .features-section-full {
        padding: 0;
        margin: 0;
        width: 100%;
        overflow: hidden;
        border-top: 1px solid rgba(255,255,255,0.1);
    }
    
    .feature-block {
        padding: 100px 50px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        min-height: 450px;
        transition: all 0.4s ease;
        position: relative;
    }
    
    .feature-block-orange {
        background-color: #f96302; /* Foundation Orange */
    }
    
    .feature-block-dark {
        background-color: #051b60; /* Foundation Dark Blue */
    }
    
    .feature-icon-box {
        font-size: 60px;
        color: #ffffff;
        margin-bottom: 30px;
    }
    
    .feature-block h3 {
        color: #ffffff;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-size: 24px;
        margin-bottom: 25px;
        line-height: 1.3;
    }
    
    .feature-block p {
        color: #ffffff;
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 0;
        opacity: 0.95;
        font-weight: 400;
    }
    
    .feature-block:hover {
        filter: brightness(1.1);
        z-index: 2;
    }

    /* Mobile handling */
    @media (max-width: 991px) {
        .feature-block {
            padding: 80px 30px;
            min-height: auto;
        }
    }
    
    @media (max-width: 768px) {
        .feature-block h3 {
            font-size: 22px;
        }
        .feature-icon-box {
            font-size: 50px;
        }
    }
</style>

<section class="features-section-full">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">
            
            <!-- Feature 1 - Orange -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="feature-block feature-block-orange">
                    <div class="feature-icon-box">
                        <i class="fa-regular fa-building"></i>
                    </div>
                    <h3>Holistic Development</h3>
                    <p>The Foundation supports women empowerment, environmental care, and skill-building programs. These efforts aim to create strong, self-reliant communities and promote a balanced, caring, and inclusive society.</p>
                </div>
            </div>
            
            <!-- Feature 2 - Dark Blue -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="feature-block feature-block-dark">
                    <div class="feature-icon-box">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h3>Cultural Preservation</h3>
                    <p>Rooted in India's rich heritage, the Foundation promotes cultural values and selfless service. Programs like Gau Seva and cultural camps help keep traditions alive while encouraging unity and leadership.</p>
                </div>
            </div>
            
            <!-- Feature 3 - Orange -->
            <div class="col-lg-4 col-md-12 text-center">
                <div class="feature-block feature-block-orange">
                    <div class="feature-icon-box">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <h3>Empowering Communities</h3>
                    <p>We focus on helping underprivileged communities by providing education, healthcare, and job opportunities. These efforts aim to give people dignity, independence, and the chance to build a better future.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>
