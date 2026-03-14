<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat Pratibha Olympiad 2025</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
        }

        .header {
            background: linear-gradient(135deg, #FF9933 0%, #FFFFFF 50%, #138808 100%);
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .logo-container {
            max-width: 300px;
            margin: 0 auto 20px;
            padding: 20px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .logo {
            width: 100%;
            height: auto;
        }

        .header h1 {
            font-size: 2.5em;
            color: #003366;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .tagline {
            font-size: 1.3em;
            color: #FF6600;
            font-style: italic;
            margin-bottom: 15px;
        }

        .organizers {
            font-size: 1.1em;
            color: #555;
            font-weight: 500;
        }

        nav {
            background: #003366;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        nav li {
            margin: 5px 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
        }

        nav a:hover {
            background: #FF6600;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .section {
            background: white;
            margin-bottom: 30px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .section h2 {
            color: #003366;
            font-size: 2em;
            margin-bottom: 20px;
            border-left: 5px solid #FF6600;
            padding-left: 15px;
        }

        .section h3 {
            color: #FF6600;
            font-size: 1.5em;
            margin: 25px 0 15px;
        }

        .objective-box {
            background: linear-gradient(135deg, #FFF5E6 0%, #E6F7FF 100%);
            padding: 30px;
            border-radius: 8px;
            border-left: 5px solid #138808;
            margin: 20px 0;
        }

        .olympiad-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .olympiad-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #003366;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .olympiad-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .olympiad-card h4 {
            color: #003366;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .olympiad-card p {
            color: #555;
            font-size: 0.95em;
        }

        .level-badge {
            display: inline-block;
            background: #FF6600;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .special-olympiad {
            background: linear-gradient(135deg, #FFE5B4 0%, #FFD4A3 100%);
            border-left-color: #FF6600;
        }

        .cta-section {
            background: linear-gradient(135deg, #003366 0%, #004d99 100%);
            color: white;
            text-align: center;
            padding: 50px;
            border-radius: 10px;
            margin: 40px 0;
        }

        .cta-section h2 {
            color: white;
            border: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .cta-button {
            display: inline-block;
            background: #FF6600;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.2em;
            font-weight: 600;
            margin: 10px;
            transition: background 0.3s, transform 0.3s;
        }

        .cta-button:hover {
            background: #FF8533;
            transform: scale(1.05);
        }

        footer {
            background: #003366;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            margin: 20px 0;
        }

        .footer-links a {
            color: #FFD700;
            text-decoration: none;
            margin: 0 15px;
        }

        .icon {
            display: inline-block;
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8em;
            }

            .tagline {
                font-size: 1em;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            .section {
                padding: 20px;
            }

            .olympiad-grid {
                grid-template-columns: 1fr;
            }
        }

        .highlight {
            background: #FFFACD;
            padding: 2px 6px;
            border-radius: 3px;
        }

        ul.feature-list {
            list-style: none;
            padding-left: 0;
        }

        ul.feature-list li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
        }

        ul.feature-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #138808;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <svg class="logo" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <!-- Outer circle with tricolor -->
                <circle cx="100" cy="100" r="95" fill="none" stroke="#FF9933" stroke-width="10"/>
                <circle cx="100" cy="100" r="85" fill="white"/>
                
                <!-- Torch flame in tricolor -->
                <path d="M 100 40 Q 90 50 95 65 Q 100 55 105 65 Q 110 50 100 40" fill="#FF9933"/>
                <path d="M 95 65 Q 100 75 105 65 Q 100 70 95 65" fill="white"/>
                <path d="M 95 65 L 105 65 L 103 75 L 97 75 Z" fill="#138808"/>
                
                <!-- Torch body -->
                <rect x="95" y="75" width="10" height="30" fill="#003366"/>
                
                <!-- Rays -->
                <g stroke="#003366" stroke-width="2" fill="none">
                    <line x1="100" y1="105" x2="100" y2="125"/>
                    <line x1="100" y1="105" x2="85" y2="120" transform="rotate(-20 100 105)"/>
                    <line x1="100" y1="105" x2="115" y2="120" transform="rotate(20 100 105)"/>
                    <line x1="100" y1="105" x2="75" y2="120" transform="rotate(-40 100 105)"/>
                    <line x1="100" y1="105" x2="125" y2="120" transform="rotate(40 100 105)"/>
                    <line x1="100" y1="105" x2="65" y2="115" transform="rotate(-60 100 105)"/>
                    <line x1="100" y1="105" x2="135" y2="115" transform="rotate(60 100 105)"/>
                </g>
                
                <!-- Text -->
                <text x="100" y="150" text-anchor="middle" font-size="18" font-weight="bold" fill="#003366">BHARAT</text>
                <text x="100" y="168" text-anchor="middle" font-size="16" font-weight="bold" fill="#003366">PRATIBHA</text>
            </svg>
        </div>
        <h1>🎓 Bharat Pratibha Olympiad 2025</h1>
        <p class="tagline">"Nurturing Young Minds, Celebrating Indian Talents"</p>
        <p class="organizers">An All India Principal Association (AIPA) & Maya Devi University, Dehradun Initiative</p>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#objective">Objective</a></li>
            <li><a href="#academic">Academic Olympiads</a></li>
            <li><a href="#skill">Skill-Based</a></li>
            <li><a href="#thematic">Thematic</a></li>
            <li><a href="#register">Register</a></li>
        </ul>
    </nav>

    <div class="container">
        <section id="about" class="section">
            <h2>🎓 About the Olympiad</h2>
            <p>The <strong>Bharat Pratibha Olympiad 2025</strong> celebrates India's young minds by recognizing academic excellence and practical skills across disciplines. Designed to nurture curiosity, creativity, and competence, this initiative brings together students from across the nation to test, learn, and grow.</p>
            
            <div style="margin-top: 30px;">
                <h3>📚 Eligibility</h3>
                <ul class="feature-list">
                    <li><strong>Classes 6th to 8th</strong> - Middle Level</li>
                    <li><strong>Classes 9th & 10th</strong> - Secondary Level</li>
                    <li><strong>Classes 11th & 12th</strong> - Senior Secondary (Science | Commerce | Humanities)</li>
                </ul>
            </div>
        </section>

        <section id="objective" class="section">
            <h2>🌟 Objective</h2>
            <div class="objective-box">
                <p style="font-size: 1.1em; text-align: center; font-weight: 500;">
                    To build a generation of learners who combine <span class="highlight">academic strength</span> with <span class="highlight">practical, creative, and ethical skills</span> — shaping India's future innovators and leaders.
                </p>
            </div>
        </section>

        <section id="academic" class="section">
            <h2>📚 A. Academic Subject Olympiads</h2>
            
            <h3><span class="level-badge">Classes 6th – 8th (Middle Level)</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>🔢 Mathematics Olympiad</h4>
                    <p>Logical reasoning, problem-solving, and numerical aptitude.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🔬 Science Olympiad</h4>
                    <p>Exploring physics, chemistry, and biology through real-life applications.</p>
                </div>
                <div class="olympiad-card">
                    <h4>📖 English Olympiad</h4>
                    <p>Grammar, vocabulary, comprehension, and creative expression.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🌍 Social Science Olympiad</h4>
                    <p>History, civics, and geography that connect past, present, and future.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🌐 General Knowledge Olympiad</h4>
                    <p>Awareness of India and the world.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💻 Computer & Cyber Olympiad</h4>
                    <p>Basics of computing, internet safety, and coding.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🇮🇳 Hindi Olympiad</h4>
                    <p>Language comprehension, grammar, and creative writing.</p>
                </div>
            </div>

            <h3><span class="level-badge" style="background: #138808;">Classes 9th – 10th (Secondary Level)</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>🔢 Mathematics Olympiad</h4>
                    <p>Advanced problem-solving and analytical thinking.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🔬 Science Olympiad</h4>
                    <p>Conceptual understanding of Physics, Chemistry & Biology.</p>
                </div>
                <div class="olympiad-card">
                    <h4>📖 English Proficiency Olympiad</h4>
                    <p>Communication, comprehension, and linguistic skills.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🌍 Social Science Olympiad</h4>
                    <p>Historical perspectives, civics awareness, and global issues.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🌐 General Knowledge Olympiad</h4>
                    <p>National and international awareness.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💻 Computer & IT Olympiad</h4>
                    <p>Digital skills, data handling, and cybersecurity basics.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🇮🇳 Hindi/Regional Language Olympiad</h4>
                    <p>Language proficiency and creative writing.</p>
                </div>
            </div>

            <h3><span class="level-badge" style="background: #003d99;">Classes 11th – 12th (Science Stream)</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>⚛️ Physics Olympiad</h4>
                    <p>Concepts, calculations, and applications in real-world physics.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🧪 Chemistry Olympiad</h4>
                    <p>Reactions, structures, and scientific reasoning.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🧬 Biology Olympiad</h4>
                    <p>Life sciences and human biology.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🔢 Mathematics Olympiad</h4>
                    <p>Higher-level reasoning and mathematical modeling.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💻 Computer Science Olympiad</h4>
                    <p>Coding, logic, and algorithmic thinking.</p>
                </div>
            </div>

            <h3><span class="level-badge" style="background: #8B4513;">Classes 11th – 12th (Commerce Stream)</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>📊 Accountancy Olympiad</h4>
                    <p>Concepts of financial statements and analysis.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💼 Business Studies Olympiad</h4>
                    <p>Understanding organization and management principles.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💰 Economics Olympiad</h4>
                    <p>Fundamentals of micro and macroeconomics.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🔢 Mathematics Olympiad</h4>
                    <p>Quantitative aptitude and problem-solving.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🚀 Entrepreneurship Olympiad</h4>
                    <p>Start-up concepts and innovation skills.</p>
                </div>
            </div>

            <h3><span class="level-badge" style="background: #800080;">Classes 11th – 12th (Humanities Stream)</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>🏛️ Political Science Olympiad</h4>
                    <p>Governance, constitution, and world politics.</p>
                </div>
                <div class="olympiad-card">
                    <h4>📜 History Olympiad</h4>
                    <p>Historical analysis and critical thinking.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🗺️ Geography Olympiad</h4>
                    <p>Environment, population, and global awareness.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💰 Economics Olympiad</h4>
                    <p>Economic principles and global trends.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🧠 Psychology Olympiad</h4>
                    <p>Human behavior and emotional intelligence.</p>
                </div>
                <div class="olympiad-card">
                    <h4>📖 English Olympiad</h4>
                    <p>Literary appreciation and language skills.</p>
                </div>
            </div>
        </section>

        <section id="skill" class="section">
            <h2>🎯 B. Skill-Based Olympiads</h2>
            
            <h3><span class="level-badge">Classes 6th – 8th</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>🤖 Artificial Intelligence Olympiad</h4>
                    <p>Basics of AI and automation concepts.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💵 Financial Literacy Olympiad</h4>
                    <p>Smart money management and budgeting skills.</p>
                </div>
                <div class="olympiad-card">
                    <h4>📰 Media Literacy Olympiad</h4>
                    <p>Understanding news, information, and social media.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🤖 Coding & Robotics Olympiad</h4>
                    <p>Logic building and innovation in technology.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🌱 Environmental Awareness Olympiad</h4>
                    <p>Sustainable living and conservation.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🗣️ Communication Skills Olympiad</h4>
                    <p>Speaking, writing, and teamwork.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🎨 Art & Creativity Olympiad</h4>
                    <p>Visual imagination and artistic skills.</p>
                </div>
            </div>

            <h3><span class="level-badge" style="background: #138808;">Classes 9th – 10th</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>🔒 Cyber Awareness Olympiad</h4>
                    <p>Safe and responsible use of digital tools.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💡 Design Thinking Olympiad</h4>
                    <p>Creative problem-solving and innovation.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🚀 Entrepreneurship Skills Olympiad</h4>
                    <p>Business ideas and innovation mindset.</p>
                </div>
                <div class="olympiad-card">
                    <h4>👥 Leadership & Life Skills Olympiad</h4>
                    <p>Collaboration, decision-making, and empathy.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🤖 AI & Machine Learning Olympiad</h4>
                    <p>Understanding intelligent systems.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💻 Digital Literacy Olympiad</h4>
                    <p>Essential digital and ICT skills.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🎯 Career Awareness Olympiad</h4>
                    <p>Early exposure to emerging career paths.</p>
                </div>
            </div>

            <h3><span class="level-badge" style="background: #003d99;">Classes 11th – 12th</span></h3>
            <div class="olympiad-grid">
                <div class="olympiad-card">
                    <h4>🔬 Research & Innovation Olympiad</h4>
                    <p>Critical inquiry and scientific investigation.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🎤 Communication & Presentation Skills Olympiad</h4>
                    <p>Professional speaking and writing.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🚀 Entrepreneurship & Start-up Olympiad</h4>
                    <p>Business innovation and leadership.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🧩 Critical Thinking & Problem Solving Olympiad</h4>
                    <p>Analytical reasoning challenges.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💼 Financial & Business Literacy Olympiad</h4>
                    <p>Real-world finance and enterprise.</p>
                </div>
                <div class="olympiad-card">
                    <h4>💻 Digital Skills & AI Olympiad</h4>
                    <p>Coding, data, and AI ethics.</p>
                </div>
                <div class="olympiad-card">
                    <h4>🤝 Social Awareness & Leadership Olympiad</h4>
                    <p>Civic responsibility and teamwork.</p>
                </div>
            </div>
        </section>

        <section id="thematic" class="section">
            <h2>🌟 C. Special Thematic Olympiads</h2>
            <p style="margin-bottom: 20px; font-size: 1.1em; color: #555;"><em>Open to All Classes (6th to 12th)</em></p>
            <div class="olympiad-grid">
                <div class="olympiad-card special-olympiad">
                    <h4>🏛️ National Heritage & Culture Olympiad</h4>
                    <p>Exploring India's diverse heritage and cultural richness.</p>
                </div>
                <div class="olympiad-card special-olympiad">
                    <h4>🌍 Sustainability & Climate Action Olympiad</h4>
                    <p>Environmental responsibility and climate awareness.</p>
                </div>
                <div class="olympiad-card special-olympiad">
                    <h4>⚽ Sports & Fitness Knowledge Olympiad</h4>
                    <p>Health, fitness, and sportsmanship values.</p>
                </div>
                <div class="olympiad-card special-olympiad">
                    <h4>❤️ Ethics & Human Values Olympiad</h4>
                    <p>Character development, empathy, and social harmony.</p>
                </div>
            </div>
        </section>

        <section id="register" class="cta-section">
  <h2>🎯 Ready to Showcase Your Talent?</h2>
  <p style="font-size: 1.2em; margin-bottom: 30px;">
    Join thousands of students across India in celebrating excellence!
  </p>
  <a href="javascript:void(0)" class="cta-button" id="openFormBtn">📝 Register Now</a>
  <a href="brochure.pdf" class="cta-button" style="background: #138808;">📄 Download Brochure</a>
</section>

<!-- Popup Form -->
<div id="popupForm" class="form-popup">
  <form id="registerForm" class="popup-content">
    <h3>Register Now</h3>
    <input type="text" name="name" id="name" placeholder="Your Name" required>
    <input type="tel" name="mobile" id="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" required>
    <input type="email" name="email" id="email" placeholder="Email Address" required>
    <button type="submit" class="cta-button" style="width:100%; border-radius:10px;">Submit</button>
    <button type="button" class="cta-button" style="background:#999; width:100%; border-radius:10px;" id="closeFormBtn">Close</button>
  </form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function(){

  const scriptURL = "https://script.google.com/macros/s/AKfycbzI1xXCN6RPlRZaKeG_MwywDSx19FSR4pv9vZCOtVeqY0W2I725_Zv-NhHgh6Si7t6J/exec";

  document.getElementById("openFormBtn").addEventListener("click", e => {
    e.preventDefault();
    document.getElementById("popupForm").style.display = "flex";
  });

  document.getElementById("closeFormBtn").addEventListener("click", () => {
    document.getElementById("popupForm").style.display = "none";
  });

  document.getElementById("registerForm").addEventListener("submit", async e => {
    e.preventDefault();
    const form = e.target;
    const submitBtn = form.querySelector("button[type='submit']");
    const oldText = submitBtn.textContent;

    submitBtn.textContent = "⏳ Submitting...";
    submitBtn.disabled = true;

    try {
      const formData = new FormData(form);

      await fetch(scriptURL, {
        method: "POST",
        body: formData,
        mode: "no-cors" // **IMPORTANT**
      });

      alert("✅ Thank you! Your registration has been received.");
      form.reset();
      document.getElementById("popupForm").style.display = "none";

    } catch (err) {
      alert("⚠️ Network error! Please try again later.");
    } finally {
      submitBtn.textContent = oldText;
      submitBtn.disabled = false;
    }
  });

});
</script>

<style>
.cta-section {
  background: linear-gradient(135deg, #003366 0%, #004d99 100%);
  color: white;
  text-align: center;
  padding: 50px;
  border-radius: 10px;
  margin: 40px 0;
}

.cta-button {
  display: inline-block;
  background: #FF6600;
  color: white;
  padding: 15px 40px;
  text-decoration: none;
  border-radius: 30px;
  font-size: 1.2em;
  font-weight: 600;
  margin: 10px;
  transition: background 0.3s, transform 0.3s;
}

.cta-button:hover {
  background: #FF8533;
  transform: scale(1.05);
}

.form-popup {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.7);
  justify-content: center;
  align-items: center;
  z-index: 999999 !important; /* FIX */
}

.popup-content {
  background: #fff;
  padding: 30px 25px;
  border-radius: 12px;
  width: 90%;
  max-width: 400px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.3);
  animation: popIn 0.3s ease;
}

.popup-content h3 {
  text-align: center;
  margin-bottom: 15px;
  color: #003366;
}

.popup-content input {
  width: 100%;
  margin: 10px 0;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1em;
}

@keyframes popIn {
  from { transform: scale(0.8); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

@media (max-width: 600px) {
  .cta-section { padding: 30px 15px; }
  .cta-button { display: block; width: 100%; margin: 10px 0; }
}
</style>
    </div>
    <footer>
        <div class="footer-content">
            <h3 style="margin-bottom: 15px;">Bharat Pratibha Olympiad 2025</h3>
            <p style="margin-bottom: 10px;">A Joint Initiative by:</p>
            <p><strong>All India Principal Association (AIPA)</strong> & <strong>Maya Devi University, Dehradun</strong></p>
            
            <div class="footer-links">
                <a href="#">Contact Us</a> | 
                <a href="#">FAQs</a> | 
                <a href="#">Guidelines</a> | 
                <a href="#">Results</a>
            </div>
            
            <p style="margin-top: 20px; font-size: 0.9em;">
                <em>"Nurturing Young Minds, Celebrating Indian Talents"</em>
            </p>
            <p style="margin-top: 15px; color: #FFD700;">© 2025 Bharat Pratibha Olympiad. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>