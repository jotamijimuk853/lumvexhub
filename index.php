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
</body>
</html>
