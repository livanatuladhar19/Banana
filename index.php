<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Sapphire Royal Suites - Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<style>
/* ================================
   THEME VARIABLES
================================ */
:root{
  --bg1:#000000;
  --bg2:#0a1a33;
  --accent:#D4AF37;
  --text:#ffffff;
  --card-bg:rgba(20, 197, 228, 0.96);
  --cta-bg:#ffffff;
  --cta-text:#000000;
}

*{box-sizing:border-box}

html,body{
  margin:0;
  height:100%;
  font-family:Inter,"Segoe UI",Arial,serif;
  color:var(--text);
}

/* ================================
   BACKGROUND
================================ */
.landing-bg{
  min-height:100vh;
  position:relative;
  overflow:hidden;
  display:flex;
  align-items:center;
  justify-content:center;
  background:
    radial-gradient(circle at 10% 20%, rgba(255,255,255,0.03), transparent 10%),
    radial-gradient(circle at 80% 80%, rgba(255,255,255,0.02), transparent 12%),
    linear-gradient(135deg,var(--bg1),var(--bg2));
}

/* ================================
   TIE DYE + ORBS
================================ */
.tie-dye{
  position:absolute;
  inset:-10%;
  background:
    radial-gradient(circle at 20% 30%, rgba(255,215,120,.04), transparent 12%),
    radial-gradient(circle at 70% 25%, rgba(200,240,255,.03), transparent 15%),
    radial-gradient(circle at 40% 75%, rgba(180,255,200,.02), transparent 14%);
  filter:blur(30px);
  animation:spin 22s linear infinite;
}
@keyframes spin{
  0%{transform:rotate(0)}
  100%{transform:rotate(360deg)}
}

.orb{
  position:absolute;
  border-radius:50%;
  filter:blur(6px);
  mix-blend-mode:screen;
}
.orb--1{width:220px;height:220px;left:6%;top:12%;background:#ffd96644;animation:f1 10s infinite}
.orb--2{width:140px;height:140px;right:8%;top:18%;background:#ffd96633;animation:f2 18s infinite}
.orb--3{width:320px;height:320px;left:40%;bottom:4%;background:#ffd96622;animation:f3 26s infinite}
.orb--4{width:90px;height:90px;right:20%;bottom:25%;background:#ffffff22;animation:f4 14s infinite}

@keyframes f1{50%{transform:translate(-10px,-30px)}}
@keyframes f2{50%{transform:translate(10px,-40px)}}
@keyframes f3{50%{transform:translate(-20px,-60px)}}
@keyframes f4{50%{transform:translateY(-18px)}}

/* ================================
   HERO
================================ */
.hero{
  z-index:5;
  width:min(1100px,92%);
  display:grid;
  grid-template-columns:1fr 420px;
  gap:28px;
  align-items:center;
}

.hero-left{
  padding:34px 40px;
  background:rgba(255,255,255,.03);
  border-radius:16px;
  backdrop-filter:blur(8px);
  box-shadow:0 18px 60px rgba(0,0,0,.6);
}

.brand{
  display:flex;
  gap:14px;
  align-items:center;
  margin-bottom:18px;
}

.brand-badge{
  width:58px;height:58px;
  border-radius:10px;
  background:linear-gradient(135deg,var(--accent),#0e8233);
  display:flex;
  align-items:center;
  justify-content:center;
  font-weight:900;
  color:#08121a;
}

.welcome-text{font-size:40px;color:rgba(255,255,255,.8)}

.hero-title{
  font-size:54px;
  font-weight:900;
  margin:0 0 12px;
  text-shadow:0 6px 18px rgba(0,0,0,.45);
}

.lead{
  font-size:18px;
  color:rgba(255,255,255,.9);
  max-width:64ch;
}

.features{
  display:flex;
  gap:12px;
  flex-wrap:wrap;
  margin-top:12px;
}
.feature{
  padding:10px 12px;
  background:rgba(255,255,255,.05);
  border-radius:10px;
  font-size:14px;
}

/* ================================
   RIGHT CARD
================================ */
.hero-right{
  background:var(--card-bg);
  color:#111;
  border-radius:14px;
  padding:22px;
  box-shadow:0 10px 30px rgba(0,0,0,.25);
}

.portal-title{font-weight:800;font-size:20px}
.portal-sub{font-size:14px;color:#444;margin-bottom:14px}

.enter-large{
  display:block;
  width:100%;
  padding:14px;
  text-align:center;
  border-radius:10px;
  text-decoration:none;
  font-weight:800;
  background:var(--cta-bg);
  color:var(--cta-text);
  transition:.2s;
}
.enter-large:hover{transform:translateY(-3px)}

/* ================================
   THEME SELECTOR
   ================================ */

#themeBtn{
  position:fixed;
  right:18px;
  bottom:18px;
  width:54px;
  height:54px;
  border-radius:50%;
  background:linear-gradient(135deg,var(--accent),#fff);
  color:#000;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:22px;
  cursor:pointer;
  box-shadow:0 10px 25px rgba(0,0,0,0.4);
  z-index:999;
}

#themePanel{
  position:fixed;
  right:18px;
  bottom:86px;
  width:220px;
  background:rgba(20,20,20,0.95);
  border-radius:14px;
  padding:14px;
  box-shadow:0 12px 40px rgba(0,0,0,0.6);
  transform:scale(0.85);
  opacity:0;
  pointer-events:none;
  transition:.25s ease;
  z-index:998;
}

#themePanel.open{
  transform:scale(1);
  opacity:1;
  pointer-events:auto;
}

.theme-title{
  font-size:14px;
  margin-bottom:10px;
  text-align:center;
  opacity:.85;
}

#swatches{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:8px;
}

.swatch{
  width:42px;
  height:42px;
  border-radius:10px;
  border:none;
  cursor:pointer;
  transition:.2s;
}

.swatch:hover{
  transform:scale(1.1);
  box-shadow:0 0 0 2px #fff;
}

.theme-panel{
  position:fixed;
  right:18px;
  bottom:86px;
  width:300px;
  background:rgba(0, 0, 0, 0.06);
  backdrop-filter:blur(10px);
  border-radius:14px;
  padding:14px;
  display:none;
}
.theme-panel.open{display:block}

.swatches{
  display:grid;
  grid-template-columns:repeat(5,1fr);
  gap:10px;
}
.swatch{
  width:44px;height:44px;
  border-radius:8px;
  cursor:pointer;
  border:none;
}

/* ================================
   RESPONSIVE
================================ */
@media(max-width:880px){
  .hero{grid-template-columns:1fr}
  .hero-right{order:-1}
  .hero-title{font-size:38px;text-align:center}
  .welcome-text{text-align:center;font-size:28px}
}
</style>
</head>

<body>

<div class="landing-bg">
  <div class="tie-dye"></div>
  <div class="orb orb--1"></div>
  <div class="orb orb--2"></div>
  <div class="orb orb--3"></div>
  <div class="orb orb--4"></div>

  <main class="hero">
    <section class="hero-left">
      <div class="brand">
        <div class="brand-badge">SRS</div>
        <div class="welcome-text">Welcome to the</div>
      </div>

      <h1 class="hero-title">Sapphire Royal Suites</h1>
      <p class="lead">
        A refined stay blending contemporary luxury with Himalayan charm.
        Explore our curated rooms, weekly deals and exclusive experiences.
      </p>

      <div class="features">
        <div class="feature">Free Wi-Fi</div>
        <div class="feature">Breakfast included</div>
        <div class="feature">Easy cancellations</div>
        <div class="feature">24/7 support</div>
      </div>
    </section>

    <aside class="hero-right">
      <div class="portal-title">Get started</div>
      <div class="portal-sub">Enter to view deals, rooms & more</div>
      <a href="login.php" class="enter-large">ENTER</a>
    </aside>
  </main>
</div>

<!-- Theme Button -->
<div id="themeBtn">🎨</div>

<!-- Theme Panel -->
<div id="themePanel">
  <div class="theme-title">Select Theme</div>
  <div id="swatches"></div>
</div>

<script>
const themes = [
  ["Royal Gold", "#0A1A33","#002a70","#D4AF37","#FFFFFF","rgba(255,255,255,0.96)","#e09898ff","#000000"],
  ["Emerald", "#023A33","#046D5D","#E5C08B","#FBF7F0","rgba(255,255,255,0.96)","#046D5D","#FFFFFF"],
  ["Sapphire", "#001E3A","#003F7D","#DDE2E7","#FCFCFC","rgba(255,255,255,0.96)","#4d386bff","#000000"],
  ["RoseGold", "#3A2E2F","#B76E79","#FDF9F6","#ffffffff","rgba(255,255,255,0.96)","#a1db6eff","#000000"],
  ["RoyalPurple", "#2a1033","#4B0082","#C8C8C8","#FFFFFF","rgba(255,255,255,0.96)","#efff60ff","#000000"],
  ["TealGold", "#062B2C","#0F6973","#C9A86A","#F7F4EF","rgba(255,255,255,0.96)","#36f9e9ff","#000000"],
  ["SunsetVibes", "#3A1F1F","#7A2C2C","#F2A65A","#FFF6EE","rgba(255,255,255,0.96)","#F2A65A","#000000"],
  ["LavenderHaze", "#201334","#5A3E8F","#E8DFFF","#FCFBFF","rgba(255,255,255,0.96)","#550536ff","#ffffffff"],
  ["OceanBreeze", "#002E3B","#1B6F8A","#AEE3E9","#F6FEFF","rgba(255,255,255,0.96)","#AEE3E9","#000000"],
  ["PinkSunset", "#2B0A1F","#5A2A4A","#FFD166","#FFF1C1","rgba(255,255,255,0.96)","#FF7AA2","#000000"],
  ["SunnyYellow", "#1C1A12","#3A3728","#F4D35E","#FFF6CC","rgba(255,255,255,0.96)","#FFD60A","#000000"],
  ["WineRed", "#722F37","#1E0F12","#4B1F25","#ffffffff","rgba(255, 255, 255, 0.96)","#db6b38ff","#000000"]
];

const swatches = document.getElementById("swatches");

themes.forEach(t => {
  const b = document.createElement("button");
  b.className = "swatch";
  b.title = t[0];
  b.style.background = `linear-gradient(135deg, ${t[1]}, ${t[2]})`;

  b.onclick = () => {
    document.documentElement.style.setProperty("--bg1", t[1]);
    document.documentElement.style.setProperty("--bg2", t[2]);
    document.documentElement.style.setProperty("--accent", t[3]);
    document.documentElement.style.setProperty("--text", t[4]);
    document.documentElement.style.setProperty("--card-bg", t[5]);
    document.documentElement.style.setProperty("--cta-bg", t[6]);
    document.documentElement.style.setProperty("--cta-text", t[7]);
  };

  swatches.appendChild(b);
});

document.getElementById("themeBtn").onclick = () => {
  document.getElementById("themePanel").classList.toggle("open");
};
</script>

</body>
</html>
