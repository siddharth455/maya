<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Application Steps</title>
</head>
<style>
  .right-panel {
    flex: 1;
    max-width: 410px;
    height: 410px;
    background: url('assets/uploads/apply.webp') center/cover no-repeat;
    color: white;
    padding: 2rem;
    border-radius: 10px;
    position: relative;
  }
  .steps-indicator {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
  }
  .step {
    text-align: center;
    flex: 1;
    position: relative;
    z-index: 1;
  }
  .step-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #ddd;
    margin: auto;
    line-height: 40px;
  }
  .slide-content {
min-height: 100px;
opacity: 1;
transition: opacity 0.5s ease-in-out;
}

.slide-content.fade-out {
opacity: 0;
}

  .step.active .step-icon {
    background: #00aaff;
    color: white;
  }
  .step-line {
    position: absolute;
    top: 20px;
    left: 50%;
    height: 2px;
    background: #ccc;
    width: 100%;
    z-index: -1;
  }
  .step:not(:last-child)::after {
    content: "";
    position: absolute;
    top: 20px;
    right: -50%;
    height: 2px;
    width: 100%;
    background: #ccc;
    z-index: -1;
  }

  .slide-content {
    min-height: 100px;
    transition: all 0.3s ease-in-out;
  }
  .slide-content h3 {
    margin-bottom: 0.5rem;
  }
  @media (max-width: 768px) {
.steps-indicator {
  flex-direction: column;
  align-items: center;
  position: relative;
  gap: 2rem;
  margin-top: 1rem;
}

.step {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  padding-bottom: 2rem;
}

.step-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #ddd;
  text-align: center;
  line-height: 40px;
  z-index: 1;
}

.step::after {
  content: "";
  position: absolute;
  top: 40px;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: calc(100% - 40px);
  background-color: #ccc;
  z-index: 0;
}

.step:last-child::after {
  display: none;
}

.left-panel {
  margin-top: 0 !important;
  text-align: center;
}

.left-panel h2 {
  text-align: center;
}
}
.slider-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 0 2rem 2rem 2rem;
    gap: 2rem;
    max-width: 1500px;
    margin: auto;
    flex-wrap: wrap;
  }
  .left-panel {
    flex: 1;
    min-width: 300px;
  }
  
  .right-panel::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 10px;
  }
  .right-panel-content {
    position: relative;
    z-index: 1;
    margin-top: 100px;
  }
  .right-panel h2 {
    font-size: 1.8rem;
    color: #fff;
    margin-bottom: 0.5rem;
  }
  .right-panel p {
    font-size: 1rem;
    color: #fff;
    margin-bottom: 1rem;
  }
  .btns {
    display: flex;
    gap: 1rem;
  }
  .btns button {
    padding: 0.75rem 1.2rem;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    background: #00aaff;
    color: white;
    cursor: pointer;
  }

</style>
<body>
    <div class="container">
          <div class="application-steps" style="background-color: #f7f7f7;">
<h1 style="text-align: center;">Steps to Follow</h1>
<div class="slider-container">
  <div class="left-panel mt-2">
    <h2>How to Apply?</h2>

    <div class="steps-indicator mt-5">
      <div class="step mb-2" id="step-0">
        <div class="step-icon">👤</div>
        <strong>Step 1</strong>
        <div>Registration Form</div>
      </div>
      <div class="step" id="step-1">
  <div class="step-icon">✅</div>
  <strong>Step 2</strong>
  <div>Application Form</div>
</div>

<div class="step" id="step-2">
  <div class="step-icon">💳</div>
  <strong>Step 3</strong>
  <div>Pay Application Fee</div>
</div>

<div class="step" id="step-3">
  <div class="step-icon">📝</div>
  <strong>Step 4</strong>
  <div>Verification & Admission</div>
</div>



    </div>

    <div class="slide-content mt-5" id="slide-content">
     
    </div>
   
  </div>

  <div class="right-panel">
    <div class="right-panel-content">
      <h2>Aspire to Inspire:<br>Master Your Field</h2>
      <p>Take the first step toward your bright future. Join our academic community today!</p>
      <div class="btns">
      <a href="https://admission.maya.edu.in/" target="_blank" rel="noopener" style="display:inline-block; padding:10px 20px; background:#007bff; color:#fff; text-decoration:none; border-radius:5px;">
    Apply Today
</a>


      </div>
    </div>
  </div>
</div>
</div>
    </div>

<script>
  const steps = [
    {
      title: "Step 1 - Registration Form",
      text: "Start by registering your account with basic contact and personal details."
    },
    {
      title: "Step 2 - Application Form",
      text: "Fill out the information and upload documents for the application processing and verification."
    },
    {
      title: "Step 3 - Pay Application Fee",
      text: "Once verified, you will be admitted and given your onboarding instructions."
    },
    {
      title: "Step 4 -Verification & Admission",
      text: "After completing the verification process, you will receive detailed instructions for your college admission."
    }
   
  ];

  let current = 0;
  const slideContent = document.getElementById("slide-content");

  function updateSlide() {
    // Fade out
    slideContent.classList.add("fade-out");

    setTimeout(() => {
      // Update text content
      slideContent.innerHTML = `
        <h3>${steps[current].title}</h3>
        <p>${steps[current].text}</p>
      `;

      // Remove fade-out and fade-in
      slideContent.classList.remove("fade-out");

      // Highlight active step
      for (let i = 0; i < 3; i++) {
        document.getElementById(`step-${i}`).classList.remove("active");
      }
      document.getElementById(`step-${current}`).classList.add("active");

      // Move to next slide
      current = (current + 1) % steps.length;
    }, 500); // Match transition duration
  }

  // Initial load
  updateSlide();
  setInterval(updateSlide, 4000); // Change every 4s
</script>


</body>
</html>
