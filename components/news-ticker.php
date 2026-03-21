<?php
// News Ticker Component
?>
<style>
    /* News Ticker Bar Styles */
    .news-ticker-wrapper {
        background-color: #f96302; /* Vibrant orange matching the sample image */
        color: #ffffff;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        font-family: 'Poppins', sans-serif;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        position: relative;
        z-index: 10;
    }
    
    .ticker-label {
        background-color: #051b60; /* Dark blue from our theme */
        color: #ffffff;
        padding: 5px 16px;
        font-weight: 600;
        font-size: 14px;
        border-radius: 4px;
        margin-right: 15px;
        white-space: nowrap;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .ticker-content {
        overflow: hidden;
        white-space: nowrap;
        flex-grow: 1;
        position: relative;
        display: flex;
        align-items: center;
    }
    
    .ticker-text {
        display: inline-block;
        padding-left: 100%;
        animation: tickerScroll 25s linear infinite;
        font-weight: 500;
        font-size: 15px;
    }
    
    .ticker-text:hover {
        animation-play-state: paused;
        cursor: pointer;
    }
    
    @keyframes tickerScroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-100%); }
    }
    
    .join-us-btn {
        background-color: #ffffff;
        color: #f96302;
        font-weight: 600;
        font-size: 14px;
        padding: 6px 20px;
        border-radius: 20px;
        text-decoration: none;
        white-space: nowrap;
        margin-left: 15px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .join-us-btn:hover, .join-us-btn:focus {
        background-color: #051b60; /* Dark Blue Hover */
        color: #ffffff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transform: translateY(-1px);
    }

    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        .news-ticker-wrapper {
            flex-direction: column;
            padding: 12px;
            align-items: stretch;
        }
        
        .ticker-top-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .ticker-label {
            margin-right: 0;
            margin-bottom: 0;
            font-size: 12px;
            padding: 4px 12px;
        }
        
        .join-us-btn {
            margin-left: 0;
            padding: 5px 16px;
            font-size: 12px;
        }
        
        .ticker-content {
            width: 100%;
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 8px;
        }
        
        .ticker-text {
            font-size: 14px;
            animation: tickerScroll 15s linear infinite; /* Faster scroll on mobile */
        }
    }
</style>

<div class="news-ticker-wrapper">
    <!-- On mobile, the label and button will show elegantly next to each other above the ticker -->
    <div class="ticker-top-row d-md-none">
        <div class="ticker-label">News</div>
        <a href="#" class="join-us-btn">Join Us</a>
    </div>

    <!-- Ticker Label for Desktop -->
    <div class="ticker-label d-none d-md-block">Updates</div>
    
    <!-- Scrolling Marquee Text -->
    <div class="ticker-content">
        <div class="ticker-text">
            An organization dedicated to uplifting communities and serving the Motherland with compassion and selfless service. &nbsp;&nbsp; | &nbsp;&nbsp; Welcome to Bhharat Utthann Foundation! &nbsp;&nbsp; | &nbsp;&nbsp; Stay tuned for upcoming events and social projects.
        </div>
    </div>
    
    <!-- Join Us Button for Desktop -->
    <a href="#" class="join-us-btn d-none d-md-block">Join Us</a>
</div>
