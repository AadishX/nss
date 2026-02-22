<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seva Srijan 2026</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Syne:wght@400;700;800&family=Caveat:wght@600&family=DM+Mono&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <canvas id="confetti"></canvas>
    <div id="modal-backdrop"></div>

    <nav>
        <a class="nav-logo" href="#">Seva <em>Srijan</em></a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#schedule">Schedule</a></li>
            <li><a href="#join">Participate</a></li>
            <li><a href="#register">Register</a></li>
        </ul>
        <button class="nav-cta register-button" command="show-modal" commandfor="registration-form">Register Now</button>
    </nav>

    <!-- HERO -->
    <section id="hero">
        <div class="hero-grid"></div>
        <div class="orb o1"></div>
        <div class="orb o2"></div>
        <div class="orb o3"></div>
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
            <button class="btn-p register-button" command="show-modal" commandfor="registration-form">Register Now 🚀</button>
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
            <div class="cd-box">
                <div class="cd-num" id="cd-d">00</div>
                <div class="cd-lbl">Days</div>
            </div>
            <div class="cd-col">:</div>
            <div class="cd-box">
                <div class="cd-num" id="cd-h">00</div>
                <div class="cd-lbl">Hours</div>
            </div>
            <div class="cd-col">:</div>
            <div class="cd-box">
                <div class="cd-num" id="cd-m">00</div>
                <div class="cd-lbl">Minutes</div>
            </div>
            <div class="cd-col">:</div>
            <div class="cd-box">
                <div class="cd-num" id="cd-s">00</div>
                <div class="cd-lbl">Seconds</div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <div class="about-visual">
            <div class="av-main">
                <div class="av-bg"></div>
                <div class="av-ring"></div>
                <div class="av-ring2"></div>
                <div class="av-center">
                    <div class="av-year">2026</div>
                    <div class="av-sub">Seva Srijan</div>
                    <div class="av-motto">"Not Me But You"</div>
                </div>
            </div>
            <div class="icard ic1">
                <div class="ic-n">20+</div>
                <div class="ic-l">Events</div>
            </div>
            <div class="icard ic2">
                <div class="ic-n">500+</div>
                <div class="ic-l">Participants</div>
            </div>
        </div>
        <div>
            <div class="eyebrow">About the Fest</div>
            <h2 class="about-h">More than a fest —<br/><span class="str">it's a movement.</span></h2>
            <p class="about-p">Seva Srijan is PGDAV (M) College's NSS annual festival — two days packed with street plays, music, visual arts, debates, photography, and a whole lot of heart. We run on the NSS motto <strong>"Not Me But You"</strong>, but you'll love every second of being here.</p>
            <p class="about-p">Come to compete, come to watch, come to volunteer — just come. Open to all DU students. No entry fee. Maximum energy.</p>
            <div class="stats">
                <div class="stat">
                    <div class="sn">20+</div>
                    <div class="sl">Events</div>
                </div>
                <div class="stat">
                    <div class="sn">500+</div>
                    <div class="sl">Students</div>
                </div>
                <div class="stat">
                    <div class="sn">2</div>
                    <div class="sl">Epic Days</div>
                </div>
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
            <div class="ev ec1">
                <div class="ev-bg"></div>
                <div class="ev-tx"></div>
                <div class="ev-ov"></div>
                <div class="ev-n">01</div>
                <div class="ev-ico">🎭</div>
                <div class="ev-body">
                    <div class="ev-tag">Flagship Event</div>
                    <div class="ev-name">Nukkad Natak — Street Play</div>
                    <div class="ev-desc">Delhi's most electric street play competition. Grab a crowd, tell a story that matters, make some noise. Teams of 6–15.</div>
                </div>
            </div>
            <div class="ev ec2">
                <div class="ev-bg"></div>
                <div class="ev-tx"></div>
                <div class="ev-ov"></div>
                <div class="ev-n">02</div>
                <div class="ev-ico">🎨</div>
                <div class="ev-body">
                    <div class="ev-tag">Visual Arts</div>
                    <div class="ev-name">Rang De — Poster & Painting</div>
                    <div class="ev-desc">Express social issues through colour and form.</div>
                </div>
            </div>
            <div class="ev ec3">
                <div class="ev-bg"></div>
                <div class="ev-tx"></div>
                <div class="ev-ov"></div>
                <div class="ev-n">03</div>
                <div class="ev-ico">🎤</div>
                <div class="ev-body">
                    <div class="ev-tag">Dialogue</div>
                    <div class="ev-name">Awaaz — Debate & Elocution</div>
                </div>
            </div>
            <div class="ev ec4">
                <div class="ev-bg"></div>
                <div class="ev-tx"></div>
                <div class="ev-ov"></div>
                <div class="ev-n">04</div>
                <div class="ev-ico">📸</div>
                <div class="ev-body">
                    <div class="ev-tag">Photography</div>
                    <div class="ev-name">Drishti — Social Lens</div>
                </div>
            </div>
            <div class="ev ec5">
                <div class="ev-bg"></div>
                <div class="ev-tx"></div>
                <div class="ev-ov"></div>
                <div class="ev-n">05</div>
                <div class="ev-ico">🎵</div>
                <div class="ev-body">
                    <div class="ev-tag">Cultural Night</div>
                    <div class="ev-name">Swar Seva — Live Music & Dance</div>
                    <div class="ev-desc">The night everyone talks about for months. The grand cultural finale of Seva Srijan.</div>
                </div>
            </div>
        </div>
        <div class="ev-strip">
            <div class="es">
                <div class="es-ico">✍️</div>
                <div class="es-n">Kalam — Creative Writing</div>
                <div class="es-d">Poetry, flash fiction, Hindi & English. One theme.</div>
            </div>
            <div class="es">
                <div class="es-ico">🎬</div>
                <div class="es-n">Reelcraft — Short Film</div>
                <div class="es-d">Submit your 3-min reel on a social issue. Screened live.</div>
            </div>
            <div class="es">
                <div class="es-ico">🤺</div>
                <div class="es-n">Prashan Kaal — Quiz</div>
                <div class="es-d">Current affairs & social awareness. Teams of two.</div>
            </div>
            <div class="es">
                <div class="es-ico">🌱</div>
                <div class="es-n">Harit Sewa — Eco Workshop</div>
                <div class="es-d">Sustainability workshop. Open to all. Free entry.</div>
            </div>
        </div>
    </section>

    <!-- SCHEDULE -->
    <section id="schedule">
        <div class="eyebrow">Two-Day Programme</div>
        <h2 class="sec-title">Schedule</h2>
        <div class="sch-wrap">
            <div class="day-tabs">
                <div class="day-tab active" onclick="switchDay(0,this)">
                    <div class="dt-n">Day One</div>
                    <div class="dt-d">March 27</div>
                    <div class="dt-l">Opening Day</div>
                </div>
                <div class="day-tab" onclick="switchDay(1,this)">
                    <div class="dt-n">Day Two</div>
                    <div class="dt-d">March 28</div>
                    <div class="dt-l">Grand Finale</div>
                </div>
            </div>
            <div class="sch-list" id="sch-list"></div>
        </div>
    </section>

    <!-- JOIN -->
    <section id="join">
        <h2 class="join-title">How to <span class="acc">Show Up</span></h2>
        <div class="steps">
            <div class="step">
                <div class="s-circle"><span class="s-n">01</span><span class="s-ico">👀</span></div>
                <div class="s-title">Pick Your Event</div>
                <div class="s-text">Browse 20+ competitions, workshops & open events. Solo or team.</div>
            </div>
            <div class="step">
                <div class="s-circle"><span class="s-n">02</span><span class="s-ico">📝</span></div>
                <div class="s-title">Register Online</div>
                <div class="s-text">Fill the form, grab your spot. Some events fill up fast.</div>
            </div>
            <div class="step">
                <div class="s-circle"><span class="s-n">03</span><span class="s-ico">📲</span></div>
                <div class="s-title">Get Your Pass</div>
                <div class="s-text">Entry pass & schedule via DM/email. Keep it handy.</div>
            </div>
            <div class="step">
                <div class="s-circle"><span class="s-n">04</span><span class="s-ico">🎉</span></div>
                <div class="s-title">Show Up & Shine</div>
                <div class="s-text">March 27–28, PGDAV (M) College. Bring your energy.</div>
            </div>
        </div>
    </section>

    <!-- REGISTER -->
    <section id="register">
        <div class="reg-c">
            <span class="reg-eye">Spots are filling up fast!</span>
            <h2 class="reg-title"><span class="rt1">Let's Go</span><br/><span class="rt2">Seva Srijan!</span></h2>
            <p class="reg-sub">Two days of culture, seva, and pure campus energy. Open to all DU students. Register free, compete hard, celebrate together.</p>
            <div class="reg-btns">
                <button class="btn-p register-button" command="show-modal" commandfor="registration-form">Register to Compete 🚀</button>
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


    <!-- MODALS -->
    <dialog id="registration-form">
       <form action="/register" method="post">
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="roll_number">Roll Number</label>
            <input type="text" name="roll_number" id="roll_number">

            <label for="phone_number">Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number">

            <label for="course">Course</label>
            <input type="text" name="course" id="course">

            <label for="year">Year</label>
            <input type="text" name="year" id="year">

            <input class="btn-p" type="submit" value="Register">
        </form>
    </dialog>

    <!-- SESSION FLASH -->
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

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
