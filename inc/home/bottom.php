 <!-- Fixed bottom section -->

 <style>
     /* Fixed bottom section - Mobile only */
     .fixed-bottom-section {
         position: fixed;
         bottom: 0;
         left: 0;
         right: 0;
         background: #066ca5;
         padding: 12px 20px;
         text-align: center;
         z-index: 1000;
         box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.25);
         border-top: 2px solid rgba(255, 255, 255, 0.2);
         display: block;
         margin-top:100px;
     }

     .fixed-bottom-section .no-hold-text {
         color: #ffffff;
         font-size: 22px;
         font-weight: bolder;
         text-transform: uppercase;
         letter-spacing: 1px;
         margin-bottom: 4px;
     }

     .fixed-bottom-section .phone-icon {
         display: inline-block;
         margin-right: 7px;
         background: url('./images/home/ringing-phone.gif') center/contain no-repeat;
         width: 30px;
         height: 50px;
         flex-shrink: 0;

     }

     .fixed-bottom-section .phone-number {
         color: #ffffff;
         font-size: 25px;
         font-weight: bolder;
         text-decoration: none;
         display: inline-flex;
         align-items: center;
     }

     .fixed-bottom-section .phone-number:hover {
         color: #93c5fd;
     }

     .fixed-bottom-section .phone {
         color: #ffffff;
         font-size: 22px;
         font-weight: bolder;
         display: flex;
         align-items: center;
         justify-content: center;
         text-decoration: none;
     }

     /* Hide fixed bottom on desktop */
     @media (min-width: 768px) {
         .fixed-bottom-section {
             display: none;
         }

         body {
             padding-bottom: 20px;
             /* Reset padding for desktop */
         }
     }

     @media (min-width: 768px) {
         .desktop-message {
             display: block;
         }
     }
 </style>

 <a href="tel:(866) 337-7171" style="text-decoration: none;">
     <div class="fixed-bottom-section">

         <div class="no-hold-text">NO HOLD TIMES: CALL NOW</div>
         <a href="tel:(866) 337-7171" class="phone">
             <span class="phone-icon"></span>
             (866) 337-7171
         </a>
     </div>

 </a>