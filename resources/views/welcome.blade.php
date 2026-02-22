<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Seva Srijan 2026</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Syne:wght@400;700;800&family=Caveat:wght@600&family=DM+Mono&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --red:#D01030;--red2:#FF2244;--crimson:#8B0020;
      --navy:#001A5C;--blue:#0D3F8F;--sky:#4488DD;
      --white:#F8F4ED;--dark:#05080F;--dark2:#0A0F1E;
      --gold:#FFD44A;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{background:var(--dark);color:var(--white);font-family:'Syne',sans-serif;overflow-x:hidden;}
    body::before{content:'';position:fixed;inset:0;z-index:0;pointer-events:none;opacity:.02;
      background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
      background-size:256px;}
    #confetti{position:fixed;inset:0;pointer-events:none;z-index:1;}

    /* NAV */
    nav{position:fixed;top:0;left:0;right:0;z-index:200;display:flex;align-items:center;justify-content:space-between;
      padding:1.1rem 3rem;background:rgba(5,8,15,.7);backdrop-filter:blur(20px);
      border-bottom:1px solid rgba(255,255,255,.06);}
    .nav-logo{font-family:'Bebas Neue',sans-serif;font-size:2rem;letter-spacing:.06em;color:var(--white);text-decoration:none;}
    .nav-logo em{color:var(--red2);font-style:normal;}
    .nav-links{display:flex;gap:2rem;list-style:none;}
    .nav-links a{font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;
      color:rgba(248,244,237,.4);text-decoration:none;transition:color .2s;}
    .nav-links a:hover{color:var(--white);}
    .nav-cta{font-family:'Bebas Neue',sans-serif;font-size:1rem;letter-spacing:.12em;
      background:var(--red2);color:#fff;border:none;padding:.55rem 1.6rem;cursor:pointer;
      clip-path:polygon(0 0,calc(100% - 8px) 0,100% 8px,100% 100%,8px 100%,0 calc(100% - 8px));
      transition:transform .15s,box-shadow .2s;}
    .nav-cta:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(255,34,68,.4);}

    /* HERO */
    #hero{min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;
      text-align:center;padding:8rem 2rem 4rem;position:relative;overflow:hidden;}
    .hero-grid{position:absolute;inset:0;
      background-image:linear-gradient(rgba(255,255,255,.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.025) 1px,transparent 1px);
      background-size:60px 60px;mask-image:radial-gradient(ellipse 80% 80% at 50% 50%,black 30%,transparent 100%);}
    .orb{position:absolute;border-radius:50%;filter:blur(120px);pointer-events:none;animation:orbf 12s ease-in-out infinite;}
    .o1{width:600px;height:600px;background:radial-gradient(circle,rgba(208,16,48,.35) 0%,transparent 70%);top:-150px;left:-150px;animation-delay:0s;}
    .o2{width:500px;height:500px;background:radial-gradient(circle,rgba(0,26,92,.5) 0%,transparent 70%);top:-100px;right:-100px;animation-delay:-4s;}
    .o3{width:350px;height:350px;background:radial-gradient(circle,rgba(255,212,74,.1) 0%,transparent 70%);bottom:0;left:40%;animation-delay:-8s;}
    @keyframes orbf{0%,100%{transform:translate(0,0)}33%{transform:translate(20px,-15px)}66%{transform:translate(-15px,20px)}}

    .hero-badge{display:inline-flex;align-items:center;gap:.6rem;
      background:rgba(255,34,68,.1);border:1px solid rgba(255,34,68,.3);
      border-radius:2px;padding:.4rem 1rem;
      font-family:'DM Mono',monospace;font-size:.7rem;letter-spacing:.1em;text-transform:uppercase;
      color:var(--red2);margin-bottom:1.5rem;animation:fadeUp .7s .2s both;}
    .bdot{width:6px;height:6px;background:var(--red2);border-radius:50%;animation:blink 1.2s infinite;}
    @keyframes blink{0%,100%{opacity:1}50%{opacity:.2}}

    .hero-title{font-family:'Bebas Neue',sans-serif;font-size:clamp(5.5rem,16vw,13rem);
      line-height:.85;letter-spacing:.01em;animation:fadeUp .9s .4s both;position:relative;z-index:2;}
    .t1{display:block;color:var(--white);}
    .t2{display:block;-webkit-text-stroke:3px var(--red2);color:transparent;text-shadow:0 0 80px rgba(255,34,68,.3);}

    .hero-tagline{font-family:'Caveat',cursive;font-size:1.3rem;color:var(--gold);
      margin:1.5rem 0;animation:fadeUp .7s .6s both;position:relative;z-index:2;}

    .hero-pills{display:flex;gap:.6rem;flex-wrap:wrap;justify-content:center;
      margin-top:1.2rem;animation:fadeUp .7s .7s both;}
    .pill{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);
      border-radius:2px;padding:.35rem .9rem;font-size:.75rem;font-weight:700;
      color:rgba(248,244,237,.6);letter-spacing:.05em;}
    .pill.r{background:rgba(255,34,68,.12);border-color:rgba(255,34,68,.3);color:var(--red2);}
    .pill.g{background:rgba(255,212,74,.1);border-color:rgba(255,212,74,.3);color:var(--gold);}
    .pill.b{background:rgba(0,26,92,.3);border-color:rgba(68,136,221,.3);color:var(--sky);}

    .hero-btns{display:flex;gap:1rem;margin-top:2rem;justify-content:center;flex-wrap:wrap;animation:fadeUp .7s .9s both;}
    .btn-p{font-family:'Bebas Neue',sans-serif;font-size:1.1rem;letter-spacing:.12em;
      background:var(--red2);color:#fff;border:none;padding:.85rem 2.2rem;cursor:pointer;
      clip-path:polygon(0 0,calc(100% - 10px) 0,100% 10px,100% 100%,10px 100%,0 calc(100% - 10px));
      text-decoration:none;display:inline-block;box-shadow:4px 4px 0 var(--crimson);
      transition:transform .2s,box-shadow .2s;}
    .btn-p:hover{transform:translate(-3px,-3px);box-shadow:7px 7px 0 var(--crimson);}
    .btn-g{font-family:'Bebas Neue',sans-serif;font-size:1.1rem;letter-spacing:.12em;
      background:transparent;color:var(--white);border:1.5px solid rgba(248,244,237,.2);
      padding:.85rem 2.2rem;cursor:pointer;text-decoration:none;display:inline-block;
      clip-path:polygon(0 0,calc(100% - 10px) 0,100% 10px,100% 100%,10px 100%,0 calc(100% - 10px));
      transition:border-color .2s,color .2s;}
    .btn-g:hover{border-color:var(--gold);color:var(--gold);}

    /* TICKER */
    .ticker{background:var(--red2);padding:.75rem 0;overflow:hidden;border-top:1px solid rgba(255,255,255,.1);}
    .t-track{display:flex;width:max-content;animation:tick 22s linear infinite;}
    .ti{font-family:'Bebas Neue',sans-serif;font-size:1rem;letter-spacing:.18em;color:rgba(255,255,255,.9);white-space:nowrap;padding:0 2rem;}
    .ts{color:rgba(255,255,255,.4);}
    @keyframes tick{to{transform:translateX(-50%)}}

    /* COUNTDOWN */
    #countdown{padding:5rem 2rem;text-align:center;background:linear-gradient(180deg,var(--dark) 0%,var(--dark2) 100%);}
    .cd-eye{font-family:'DM Mono',monospace;font-size:.7rem;letter-spacing:.2em;text-transform:uppercase;color:var(--red2);margin-bottom:.8rem;}
    .cd-title{font-family:'Bebas Neue',sans-serif;font-size:clamp(1.8rem,4vw,2.8rem);letter-spacing:.04em;color:rgba(248,244,237,.45);margin-bottom:2.5rem;}
    .cd-title strong{color:var(--white);}
    .cd-wrap{display:inline-flex;gap:0;}
    .cd-box{min-width:120px;padding:1.8rem 1.2rem;border:1px solid rgba(255,255,255,.07);background:rgba(255,255,255,.02);transition:background .3s;}
    .cd-box:not(:last-child){border-right:none;}
    .cd-box:hover{background:rgba(208,16,48,.08);}
    .cd-num{font-family:'Bebas Neue',sans-serif;font-size:clamp(3.5rem,6vw,5.5rem);line-height:1;color:var(--white);}
    .cd-lbl{font-family:'DM Mono',monospace;font-size:.6rem;letter-spacing:.22em;text-transform:uppercase;color:rgba(248,244,237,.22);margin-top:.4rem;}
    .cd-col{font-family:'Bebas Neue',sans-serif;font-size:4rem;color:rgba(255,255,255,.1);align-self:center;padding:0 .3rem;animation:blink 1s infinite;}

    /* ABOUT */
    #about{padding:7rem 3rem;display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;position:relative;}
    #about::before{content:'';position:absolute;top:0;left:3rem;right:3rem;height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,.07),transparent);}
    .about-visual{width:100%;aspect-ratio:1;max-width:400px;margin:0 auto;position:relative;}
    .av-main{width:100%;height:100%;border:1px solid rgba(255,255,255,.07);background:var(--dark2);border-radius:4px;overflow:hidden;position:relative;}
    .av-bg{position:absolute;inset:0;background:conic-gradient(from 0deg at 50% 50%,var(--navy) 0deg,var(--crimson) 120deg,var(--navy) 240deg,var(--navy) 360deg);opacity:.4;animation:spin 30s linear infinite;}
    .av-ring{position:absolute;inset:10%;border-radius:50%;border:1px solid rgba(255,255,255,.05);animation:spin 20s linear infinite reverse;}
    .av-ring2{position:absolute;inset:20%;border-radius:50%;border:1px solid rgba(208,16,48,.12);animation:spin 15s linear infinite;}
    .av-center{position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.6rem;}
    .av-year{font-family:'Bebas Neue',sans-serif;font-size:clamp(4rem,10vw,7rem);line-height:1;color:var(--white);text-shadow:0 0 60px rgba(255,34,68,.4);}
    .av-sub{font-family:'DM Mono',monospace;font-size:.62rem;letter-spacing:.3em;text-transform:uppercase;color:rgba(255,255,255,.3);}
    .av-motto{font-family:'Caveat',cursive;font-size:1rem;color:var(--gold);}
    @keyframes spin{to{transform:rotate(360deg)}}
    .icard{position:absolute;background:var(--dark2);border:1px solid rgba(255,255,255,.1);border-radius:4px;padding:.7rem 1.1rem;box-shadow:0 16px 32px rgba(0,0,0,.4);animation:flt 5s ease-in-out infinite;}
    .ic1{top:-16px;right:-24px;animation-delay:0s;}
    .ic2{bottom:32px;left:-24px;animation-delay:-2.5s;}
    @keyframes flt{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
    .ic-n{font-family:'Bebas Neue',sans-serif;font-size:1.8rem;line-height:1;}
    .ic1 .ic-n{color:var(--red2);}
    .ic2 .ic-n{color:var(--gold);}
    .ic-l{font-family:'DM Mono',monospace;font-size:.58rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(255,255,255,.3);}
    .eyebrow{font-family:'DM Mono',monospace;font-size:.7rem;letter-spacing:.2em;text-transform:uppercase;color:var(--red2);margin-bottom:1rem;display:flex;align-items:center;gap:.7rem;}
    .eyebrow::before{content:'';display:block;width:20px;height:1px;background:var(--red2);}
    .about-h{font-family:'Bebas Neue',sans-serif;font-size:clamp(2.8rem,5vw,4.5rem);line-height:.95;margin-bottom:1.8rem;}
    .about-h .str{display:block;-webkit-text-stroke:2px rgba(248,244,237,.25);color:transparent;}
    .about-p{font-size:.95rem;line-height:1.85;color:rgba(248,244,237,.45);margin-bottom:1rem;}
    .about-p strong{color:var(--white);}
    .stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;margin-top:2rem;border:1px solid rgba(255,255,255,.06);}
    .stat{padding:1.3rem;text-align:center;background:rgba(255,255,255,.02);transition:background .3s;}
    .stat:hover{background:rgba(208,16,48,.07);}
    .sn{font-family:'Bebas Neue',sans-serif;font-size:3rem;line-height:1;color:var(--white);}
    .stats .stat:nth-child(1) .sn{color:var(--red2);}
    .stats .stat:nth-child(2) .sn{color:var(--gold);}
    .stats .stat:nth-child(3) .sn{color:var(--sky);}
    .sl{font-family:'DM Mono',monospace;font-size:.58rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(248,244,237,.22);margin-top:.3rem;}

    /* EVENTS */
    #events{padding:5rem 3rem;}
    .sec-hdr{display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:2.5rem;flex-wrap:wrap;gap:1rem;}
    .sec-title{font-family:'Bebas Neue',sans-serif;font-size:clamp(3rem,6vw,5.5rem);line-height:.9;letter-spacing:.02em;}
    .sec-title .out{-webkit-text-stroke:2px rgba(248,244,237,.18);color:transparent;display:block;}
    .all-lnk{font-family:'DM Mono',monospace;font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;color:var(--red2);text-decoration:none;display:flex;align-items:center;gap:.4rem;transition:gap .2s;}
    .all-lnk:hover{gap:.8rem;}
    .all-lnk::after{content:'→';}
    .ev-grid{display:grid;grid-template-columns:repeat(12,1fr);grid-template-rows:300px 260px;gap:8px;}
    .ev{border-radius:4px;overflow:hidden;position:relative;cursor:pointer;transition:transform .4s cubic-bezier(.23,1,.32,1);}
    .ev:hover{transform:scale(1.02);z-index:2;}
    .ev:hover .ev-bg{transform:scale(1.07);}
    .ev:nth-child(1){grid-column:span 7;}
    .ev:nth-child(2){grid-column:span 5;}
    .ev:nth-child(3){grid-column:span 4;}
    .ev:nth-child(4){grid-column:span 4;}
    .ev:nth-child(5){grid-column:span 4;}
    .ev-bg{position:absolute;inset:0;transition:transform .6s cubic-bezier(.23,1,.32,1);}
    .ec1 .ev-bg{background:linear-gradient(160deg,#3D0015 0%,#8B0020 40%,#C8102E 100%);}
    .ec2 .ev-bg{background:linear-gradient(160deg,#001029 0%,#001A5C 60%,#0D3F8F 100%);}
    .ec3 .ev-bg{background:linear-gradient(160deg,#0D0018 0%,#1A0030 50%,#3D0050 100%);}
    .ec4 .ev-bg{background:linear-gradient(160deg,#001C2A 0%,#003050 60%,#005080 100%);}
    .ec5 .ev-bg{background:linear-gradient(160deg,#1A0A00 0%,#5C2000 60%,#8B3500 100%);}
    .ev-tx{position:absolute;inset:0;opacity:.06;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");background-size:180px;}
    .ev-ov{position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,.8) 0%,transparent 60%);}
    .ev-body{position:absolute;bottom:0;left:0;right:0;padding:1.5rem;}
    .ev-tag{display:inline-block;font-family:'DM Mono',monospace;font-size:.58rem;letter-spacing:.18em;text-transform:uppercase;border:1px solid rgba(255,255,255,.2);border-radius:2px;padding:.18rem .55rem;color:rgba(255,255,255,.55);margin-bottom:.5rem;}
    .ev-name{font-family:'Bebas Neue',sans-serif;font-size:clamp(1.2rem,2.5vw,1.9rem);color:var(--white);line-height:1.05;letter-spacing:.02em;}
    .ev:nth-child(1) .ev-name,.ev:nth-child(5) .ev-name{font-size:clamp(1.6rem,3vw,2.6rem);}
    .ev-desc{font-size:.8rem;color:rgba(255,255,255,.45);margin-top:.4rem;line-height:1.6;}
    .ev:nth-child(2) .ev-desc,.ev:nth-child(3) .ev-desc,.ev:nth-child(4) .ev-desc{display:none;}
    .ev-ico{position:absolute;top:1rem;right:1rem;font-size:1.8rem;filter:drop-shadow(0 4px 8px rgba(0,0,0,.5));}
    .ev-n{position:absolute;top:1rem;left:1rem;font-family:'DM Mono',monospace;font-size:.6rem;letter-spacing:.12em;color:rgba(255,255,255,.18);}
    .ev-strip{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin-top:8px;}
    .es{border:1px solid rgba(255,255,255,.06);border-radius:4px;padding:1.4rem;background:rgba(255,255,255,.02);cursor:pointer;transition:border-color .25s,background .25s;position:relative;overflow:hidden;}
    .es::after{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--red2),transparent);transform:scaleX(0);transform-origin:left;transition:transform .3s;}
    .es:hover{border-color:rgba(255,34,68,.3);background:rgba(208,16,48,.06);}
    .es:hover::after{transform:scaleX(1);}
    .es-ico{font-size:1.6rem;margin-bottom:.7rem;}
    .es-n{font-size:.88rem;font-weight:800;color:var(--white);margin-bottom:.35rem;}
    .es-d{font-size:.75rem;color:rgba(248,244,237,.32);line-height:1.5;}

    /* SCHEDULE */
    #schedule{padding:5rem 3rem;background:var(--dark2);position:relative;overflow:hidden;}
    #schedule::before{content:'MARCH';position:absolute;right:-1rem;top:50%;transform:translateY(-50%);font-family:'Bebas Neue',sans-serif;font-size:18rem;line-height:1;color:rgba(255,255,255,.015);pointer-events:none;}
    .sch-wrap{display:grid;grid-template-columns:240px 1fr;gap:3rem;align-items:start;margin-top:2.5rem;}
    .day-tabs{display:flex;flex-direction:column;border:1px solid rgba(255,255,255,.07);}
    .day-tab{padding:1.3rem 1.5rem;cursor:pointer;border-bottom:1px solid rgba(255,255,255,.06);transition:background .2s;position:relative;}
    .day-tab:last-child{border-bottom:none;}
    .day-tab.active{background:rgba(208,16,48,.1);}
    .day-tab.active::before{content:'';position:absolute;left:0;top:0;bottom:0;width:3px;background:var(--red2);}
    .dt-n{font-family:'DM Mono',monospace;font-size:.6rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.28);}
    .dt-d{font-family:'Bebas Neue',sans-serif;font-size:1.9rem;letter-spacing:.04em;color:var(--white);line-height:1.1;}
    .dt-l{font-size:.78rem;color:rgba(255,255,255,.3);margin-top:.15rem;}
    .sch-list{display:flex;flex-direction:column;gap:1px;}
    .si{display:grid;grid-template-columns:90px 1fr auto;gap:1.5rem;padding:1.2rem;border:1px solid rgba(255,255,255,.05);background:rgba(255,255,255,.02);align-items:center;transition:background .2s;}
    .si:hover{background:rgba(255,255,255,.04);}
    .si-time{font-family:'DM Mono',monospace;font-size:.78rem;color:rgba(255,255,255,.28);letter-spacing:.04em;}
    .si-name{font-weight:700;font-size:.9rem;color:var(--white);}
    .si-sub{font-size:.75rem;color:rgba(255,255,255,.28);margin-top:.15rem;}
    .si-badge{font-family:'DM Mono',monospace;font-size:.58rem;letter-spacing:.12em;text-transform:uppercase;padding:.18rem .55rem;border-radius:2px;white-space:nowrap;}
    .bo{background:rgba(0,80,120,.4);color:var(--sky);}
    .bf{background:rgba(208,16,48,.3);color:var(--red2);}
    .bn{background:rgba(255,212,74,.15);color:var(--gold);}

    /* JOIN */
    #join{padding:5rem 3rem;}
    .join-title{font-family:'Bebas Neue',sans-serif;font-size:clamp(2.5rem,5vw,4rem);letter-spacing:.03em;text-align:center;margin-bottom:3.5rem;}
    .join-title .acc{color:var(--gold);}
    .steps{display:grid;grid-template-columns:repeat(4,1fr);position:relative;}
    .step{padding:2rem 1.5rem;text-align:center;}
    .s-circle{width:52px;height:52px;margin:0 auto 1.3rem;border:1px solid rgba(255,255,255,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;position:relative;transition:border-color .3s;}
    .step:hover .s-circle{border-color:var(--red2);}
    .s-n{font-family:'DM Mono',monospace;font-size:.85rem;color:rgba(255,255,255,.35);}
    .s-ico{position:absolute;top:-7px;right:-7px;font-size:1.2rem;}
    .s-title{font-weight:800;font-size:.95rem;color:var(--white);margin-bottom:.5rem;}
    .s-text{font-size:.8rem;color:rgba(248,244,237,.35);line-height:1.6;}

    /* REGISTER */
    #register{padding:9rem 3rem;text-align:center;position:relative;overflow:hidden;}
    #register::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 50% 50%,rgba(208,16,48,.14) 0%,transparent 70%);}
    #register::after{content:'';position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.018) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.018) 1px,transparent 1px);background-size:80px 80px;}
    .reg-c{position:relative;z-index:2;}
    .reg-eye{font-family:'Caveat',cursive;font-size:1.3rem;color:var(--gold);display:block;margin-bottom:.8rem;}
    .reg-title{font-family:'Bebas Neue',sans-serif;font-size:clamp(4rem,10vw,9rem);line-height:.85;margin-bottom:1.5rem;}
    .rt1{color:var(--white);}
    .rt2{-webkit-text-stroke:3px var(--red2);color:transparent;text-shadow:0 0 60px rgba(255,34,68,.25);}
    .reg-sub{font-size:.95rem;color:rgba(248,244,237,.38);max-width:440px;margin:0 auto 3rem;line-height:1.8;}
    .reg-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;}

    /* FOOTER */
    footer{background:#020408;border-top:1px solid rgba(255,255,255,.05);padding:2.5rem 3rem;}
    .ft{display:flex;align-items:center;justify-content:space-between;padding-bottom:1.5rem;border-bottom:1px solid rgba(255,255,255,.04);flex-wrap:wrap;gap:1.2rem;}
    .fl{font-family:'Bebas Neue',sans-serif;font-size:2.5rem;letter-spacing:.04em;color:var(--white);line-height:1;}
    .fl em{color:var(--red2);font-style:normal;}
    .fl small{display:block;font-family:'DM Mono',monospace;font-size:.58rem;letter-spacing:.22em;text-transform:uppercase;color:rgba(255,255,255,.22);}
    .fb{display:flex;align-items:center;justify-content:space-between;padding-top:1.5rem;flex-wrap:wrap;gap:1rem;}
    .fcopy{font-family:'DM Mono',monospace;font-size:.62rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.16);}
    .fmotto{font-family:'Caveat',cursive;font-size:1rem;color:var(--red2);}

    @keyframes fadeUp{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:translateY(0)}}

    @media(max-width:900px){
      nav{padding:1rem 1.5rem;}.nav-links{display:none;}
      #about{grid-template-columns:1fr;gap:3rem;padding:5rem 1.5rem;}
      #events,#schedule,#join,#register,#countdown{padding:4rem 1.5rem;}
      #about{padding:5rem 1.5rem;}
      .ev-grid{grid-template-columns:1fr 1fr;grid-template-rows:repeat(4,240px);}
      .ev:nth-child(1),.ev:nth-child(5){grid-column:span 2;}
      .ev:nth-child(2),.ev:nth-child(3),.ev:nth-child(4){grid-column:span 1;}
      .ev-strip{grid-template-columns:1fr 1fr;}
      .steps{grid-template-columns:1fr 1fr;}
      .sch-wrap{grid-template-columns:1fr;gap:1.5rem;}
      footer{padding:2rem 1.5rem;}
    }
    @media(max-width:540px){
      .ev-grid{grid-template-columns:1fr;}.ev{grid-column:span 1!important;}
      .ev-strip,.steps{grid-template-columns:1fr;}
      .cd-wrap{flex-wrap:wrap;}.cd-col{display:none;}
      .stats{grid-template-columns:1fr;}
    }
  </style>
</head>
<body>
<canvas id="confetti"></canvas>

<nav>
  <a class="nav-logo" href="#">Seva <em>Srijan</em></a>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#events">Events</a></li>
    <li><a href="#schedule">Schedule</a></li>
    <li><a href="#join">Participate</a></li>
    <li><a class="register-button" href="#register">Register</a></li>
  </ul>
  <button class="nav-cta" onclick="document.getElementById('register').scrollIntoView({behavior:'smooth'})">Register Now</button>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-grid"></div>
  <div class="orb o1"></div><div class="orb o2"></div><div class="orb o3"></div>
  <div class="hero-badge"><span class="bdot"></span> PGDAV (M) College · NSS Unit · 2026</div>
  <h1 class="hero-title"><span class="t1">Seva</span><span class="t2">Srijan</span></h1>
  <div class="hero-tagline">Where service fuels celebration ✦ March 27–28, 2026</div>
  <div class="hero-pills">
    <span class="pill r">🎭 Cultural</span>
    <span class="pill g">🤝 Community</span>
    <span class="pill b">🎵 Performances</span>
    <span class="pill">🏆 Competitions</span>
    <span class="pill">💡 Workshops</span>
  </div>
  <div class="hero-btns">
    <a class="btn-p" href="#register">Register Now 🚀</a>
    <a class="btn-g" href="#events">View Events</a>
  </div>
</section>

<!-- TICKER -->
<div class="ticker">
  <div class="t-track">
    <span class="ti">Seva Srijan 2026</span><span class="ti ts">✦</span>
    <span class="ti">Not Me But You</span><span class="ti ts">✦</span>
    <span class="ti">NSS · PGDAV (M) College</span><span class="ti ts">✦</span>
    <span class="ti">March 27 &amp; 28</span><span class="ti ts">✦</span>
    <span class="ti">Serve · Celebrate · Shine</span><span class="ti ts">✦</span>
    <span class="ti">Nukkad Natak · Rang De · Awaaz</span><span class="ti ts">✦</span>
    <span class="ti">Seva Srijan 2026</span><span class="ti ts">✦</span>
    <span class="ti">Not Me But You</span><span class="ti ts">✦</span>
    <span class="ti">NSS · PGDAV (M) College</span><span class="ti ts">✦</span>
    <span class="ti">March 27 &amp; 28</span><span class="ti ts">✦</span>
    <span class="ti">Serve · Celebrate · Shine</span><span class="ti ts">✦</span>
    <span class="ti">Nukkad Natak · Rang De · Awaaz</span><span class="ti ts">✦</span>
  </div>
</div>

<!-- COUNTDOWN -->
<section id="countdown">
  <div class="cd-eye">Time Remaining</div>
  <div class="cd-title">Fest begins <strong>March 27, 2026</strong></div>
  <div class="cd-wrap">
    <div class="cd-box"><div class="cd-num" id="cd-d">00</div><div class="cd-lbl">Days</div></div>
    <div class="cd-col">:</div>
    <div class="cd-box"><div class="cd-num" id="cd-h">00</div><div class="cd-lbl">Hours</div></div>
    <div class="cd-col">:</div>
    <div class="cd-box"><div class="cd-num" id="cd-m">00</div><div class="cd-lbl">Minutes</div></div>
    <div class="cd-col">:</div>
    <div class="cd-box"><div class="cd-num" id="cd-s">00</div><div class="cd-lbl">Seconds</div></div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="about-visual">
    <div class="av-main">
      <div class="av-bg"></div><div class="av-ring"></div><div class="av-ring2"></div>
      <div class="av-center">
        <div class="av-year">2026</div>
        <div class="av-sub">Seva Srijan</div>
        <div class="av-motto">"Not Me But You"</div>
      </div>
    </div>
    <div class="icard ic1"><div class="ic-n">20+</div><div class="ic-l">Events</div></div>
    <div class="icard ic2"><div class="ic-n">500+</div><div class="ic-l">Participants</div></div>
  </div>
  <div>
    <div class="eyebrow">About the Fest</div>
    <h2 class="about-h">More than a fest —<br/><span class="str">it's a movement.</span></h2>
    <p class="about-p">Seva Srijan is PGDAV (M) College's NSS annual festival — two days packed with street plays, music, visual arts, debates, photography, and a whole lot of heart. We run on the NSS motto <strong>"Not Me But You"</strong>, but you'll love every second of being here.</p>
    <p class="about-p">Come to compete, come to watch, come to volunteer — just come. Open to all DU students. No entry fee. Maximum energy.</p>
    <div class="stats">
      <div class="stat"><div class="sn">20+</div><div class="sl">Events</div></div>
      <div class="stat"><div class="sn">500+</div><div class="sl">Students</div></div>
      <div class="stat"><div class="sn">2</div><div class="sl">Epic Days</div></div>
    </div>
  </div>
</section>

<!-- EVENTS -->
<section id="events">
  <div class="sec-hdr">
    <div>
      <div class="eyebrow">Competitions & Workshops</div>
      <h2 class="sec-title">What's<br/><span class="out">Happening</span></h2>
    </div>
    <a class="all-lnk" href="#">All Events</a>
  </div>
  <div class="ev-grid">
    <div class="ev ec1"><div class="ev-bg"></div><div class="ev-tx"></div><div class="ev-ov"></div>
      <div class="ev-n">01</div><div class="ev-ico">🎭</div>
      <div class="ev-body"><div class="ev-tag">Flagship Event</div><div class="ev-name">Nukkad Natak — Street Play</div><div class="ev-desc">Delhi's most electric street play competition. Grab a crowd, tell a story that matters, make some noise. Teams of 6–15.</div></div>
    </div>
    <div class="ev ec2"><div class="ev-bg"></div><div class="ev-tx"></div><div class="ev-ov"></div>
      <div class="ev-n">02</div><div class="ev-ico">🎨</div>
      <div class="ev-body"><div class="ev-tag">Visual Arts</div><div class="ev-name">Rang De — Poster & Painting</div><div class="ev-desc">Express social issues through colour and form.</div></div>
    </div>
    <div class="ev ec3"><div class="ev-bg"></div><div class="ev-tx"></div><div class="ev-ov"></div>
      <div class="ev-n">03</div><div class="ev-ico">🎤</div>
      <div class="ev-body"><div class="ev-tag">Dialogue</div><div class="ev-name">Awaaz — Debate & Elocution</div></div>
    </div>
    <div class="ev ec4"><div class="ev-bg"></div><div class="ev-tx"></div><div class="ev-ov"></div>
      <div class="ev-n">04</div><div class="ev-ico">📸</div>
      <div class="ev-body"><div class="ev-tag">Photography</div><div class="ev-name">Drishti — Social Lens</div></div>
    </div>
    <div class="ev ec5"><div class="ev-bg"></div><div class="ev-tx"></div><div class="ev-ov"></div>
      <div class="ev-n">05</div><div class="ev-ico">🎵</div>
      <div class="ev-body"><div class="ev-tag">Cultural Night</div><div class="ev-name">Swar Seva — Live Music & Dance</div><div class="ev-desc">The night everyone talks about for months. The grand cultural finale of Seva Srijan.</div></div>
    </div>
  </div>
  <div class="ev-strip">
    <div class="es"><div class="es-ico">✍️</div><div class="es-n">Kalam — Creative Writing</div><div class="es-d">Poetry, flash fiction, Hindi & English. One theme.</div></div>
    <div class="es"><div class="es-ico">🎬</div><div class="es-n">Reelcraft — Short Film</div><div class="es-d">Submit your 3-min reel on a social issue. Screened live.</div></div>
    <div class="es"><div class="es-ico">🤺</div><div class="es-n">Prashan Kaal — Quiz</div><div class="es-d">Current affairs & social awareness. Teams of two.</div></div>
    <div class="es"><div class="es-ico">🌱</div><div class="es-n">Harit Sewa — Eco Workshop</div><div class="es-d">Sustainability workshop. Open to all. Free entry.</div></div>
  </div>
</section>

<!-- SCHEDULE -->
<section id="schedule">
  <div class="eyebrow">Two-Day Programme</div>
  <h2 class="sec-title">Schedule</h2>
  <div class="sch-wrap">
    <div class="day-tabs">
      <div class="day-tab active" onclick="switchDay(0,this)">
        <div class="dt-n">Day One</div><div class="dt-d">March 27</div><div class="dt-l">Opening Day</div>
      </div>
      <div class="day-tab" onclick="switchDay(1,this)">
        <div class="dt-n">Day Two</div><div class="dt-d">March 28</div><div class="dt-l">Grand Finale</div>
      </div>
    </div>
    <div class="sch-list" id="sch-list"></div>
  </div>
</section>

<!-- JOIN -->
<section id="join">
  <h2 class="join-title">How to <span class="acc">Show Up</span></h2>
  <div class="steps">
    <div class="step"><div class="s-circle"><span class="s-n">01</span><span class="s-ico">👀</span></div><div class="s-title">Pick Your Event</div><div class="s-text">Browse 20+ competitions, workshops & open events. Solo or team.</div></div>
    <div class="step"><div class="s-circle"><span class="s-n">02</span><span class="s-ico">📝</span></div><div class="s-title">Register Online</div><div class="s-text">Fill the form, grab your spot. Some events fill up fast.</div></div>
    <div class="step"><div class="s-circle"><span class="s-n">03</span><span class="s-ico">📲</span></div><div class="s-title">Get Your Pass</div><div class="s-text">Entry pass & schedule via DM/email. Keep it handy.</div></div>
    <div class="step"><div class="s-circle"><span class="s-n">04</span><span class="s-ico">🎉</span></div><div class="s-title">Show Up & Shine</div><div class="s-text">March 27–28, PGDAV (M) College. Bring your energy.</div></div>
  </div>
</section>

<!-- REGISTER -->
<section id="register">
  <div class="reg-c">
    <span class="reg-eye">Spots are filling up fast!</span>
    <h2 class="reg-title"><span class="rt1">Let's Go</span><br/><span class="rt2">Seva Srijan!</span></h2>
    <p class="reg-sub">Two days of culture, seva, and pure campus energy. Open to all DU students. Register free, compete hard, celebrate together.</p>
    <div class="reg-btns">
      <a class="btn-p" href="#">Register to Compete 🚀</a>
      <a class="btn-g" href="#">Volunteer Instead 🤝</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="ft">
    <div class="fl">Seva <em>Srijan</em> '26<small>PGDAV (M) College · NSS Unit · University of Delhi</small></div>
  </div>
  <div class="fb">
    <div class="fcopy">© 2026 Seva Srijan · NSS PGDAV (M) · March 27–28, New Delhi</div>
    <div class="fmotto">"Not Me But You" ❤</div>
  </div>
</footer>

<script>
// COUNTDOWN
const target=new Date('2026-03-27T09:00:00+05:30').getTime();
function tick(){
  const d=target-Date.now();
  if(d<=0){['cd-d','cd-h','cd-m','cd-s'].forEach(i=>document.getElementById(i).textContent='00');return;}
  document.getElementById('cd-d').textContent=String(Math.floor(d/86400000)).padStart(2,'0');
  document.getElementById('cd-h').textContent=String(Math.floor((d%86400000)/3600000)).padStart(2,'0');
  document.getElementById('cd-m').textContent=String(Math.floor((d%3600000)/60000)).padStart(2,'0');
  document.getElementById('cd-s').textContent=String(Math.floor((d%60000)/1000)).padStart(2,'0');
}
tick();setInterval(tick,1000);

// SCHEDULE
const days=[
  [{t:'09:00 AM',n:'Inauguration Ceremony',s:'Welcome address & lamp lighting',b:'bf',l:'Opening'},
   {t:'10:00 AM',n:'Nukkad Natak — Round 1',s:'Street Play Competition · Main Ground',b:'bf',l:'Flagship'},
   {t:'12:30 PM',n:'Rang De — Painting',s:'Poster & Painting · Art Room',b:'bo',l:'Open'},
   {t:'02:00 PM',n:'Awaaz — Debate Round 1',s:'Main Auditorium · Hindi & English',b:'bo',l:'Open'},
   {t:'04:00 PM',n:'Kalam — Creative Writing',s:'Creative Writing & Poetry · Library',b:'bo',l:'Open'},
   {t:'06:00 PM',n:'Cultural Evening — Day 1',s:'Live performances & open mic',b:'bn',l:'Evening'}],
  [{t:'09:30 AM',n:'Nukkad Natak — Finals',s:'Street Play Finals · Main Ground',b:'bf',l:'Flagship'},
   {t:'11:00 AM',n:'Drishti — Photography',s:'Social Lens Exhibition · Gallery',b:'bo',l:'Open'},
   {t:'12:30 PM',n:'Prashan Kaal — Quiz',s:'GK & Current Affairs · Seminar Hall',b:'bo',l:'Open'},
   {t:'02:30 PM',n:'Awaaz — Grand Finale',s:'Debate & Elocution Finals',b:'bf',l:'Finals'},
   {t:'04:30 PM',n:'Harit Sewa Workshop',s:'Eco & sustainability workshop',b:'bo',l:'Open'},
   {t:'07:00 PM',n:'Swar Seva — Cultural Night 🎵',s:'The Grand Finale · Main Stage',b:'bn',l:'Headliner'}]
];
function switchDay(i,el){
  document.querySelectorAll('.day-tab').forEach(t=>t.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('sch-list').innerHTML=days[i].map(e=>`
    <div class="si"><div class="si-time">${e.t}</div><div><div class="si-name">${e.n}</div><div class="si-sub">${e.s}</div></div><span class="si-badge ${e.b}">${e.l}</span></div>
  `).join('');
}
switchDay(0,document.querySelector('.day-tab'));

// CONFETTI
const cv=document.getElementById('confetti'),cx=cv.getContext('2d');
cv.width=window.innerWidth;cv.height=window.innerHeight;
window.addEventListener('resize',()=>{cv.width=window.innerWidth;cv.height=window.innerHeight;});
const C=['#D01030','#FF2244','#F8F4ED','#001A5C','#4488DD','#FFD44A'];
const pp=Array.from({length:50},()=>({
  x:Math.random()*cv.width,y:Math.random()*cv.height-cv.height,
  w:Math.random()*9+4,h:Math.random()*5+2,
  r:Math.random()*Math.PI*2,dr:(Math.random()-.5)*.05,
  dy:Math.random()*.9+.3,dx:(Math.random()-.5)*.6,
  col:C[Math.floor(Math.random()*C.length)],op:Math.random()*.3+.07
}));
function draw(){
  cx.clearRect(0,0,cv.width,cv.height);
  pp.forEach(p=>{
    cx.save();cx.globalAlpha=p.op;cx.fillStyle=p.col;
    cx.translate(p.x+p.w/2,p.y+p.h/2);cx.rotate(p.r);
    cx.fillRect(-p.w/2,-p.h/2,p.w,p.h);cx.restore();
    p.y+=p.dy;p.x+=p.dx;p.r+=p.dr;
    if(p.y>cv.height){p.y=-20;p.x=Math.random()*cv.width;}
  });
  requestAnimationFrame(draw);
}
draw();

// SCROLL REVEAL
const obs=new IntersectionObserver(e=>e.forEach(x=>{
  if(x.isIntersecting){x.target.style.opacity='1';x.target.style.transform='translateY(0) scale(1)';}
}),{threshold:.08});
document.querySelectorAll('.ev,.es,.stat,.step,.cd-box,.si,.icard').forEach((el,i)=>{
  el.style.opacity='0';el.style.transform='translateY(24px) scale(0.97)';
  el.style.transition=`opacity .6s cubic-bezier(.23,1,.32,1) ${i*.06}s, transform .6s cubic-bezier(.23,1,.32,1) ${i*.06}s`;
  obs.observe(el);
});
</script>
</body>
</html>
