# Phishing Awareness Simulation

Hi, I’m Advait Kawale, and this is my project **Phishing Awareness Simulation**.  
I built this system to create a safe environment where people can experience phishing techniques firsthand and learn how to recognize them. Instead of just reading about phishing, this simulator allows trainers and learners to actually see how these attacks unfold—without any real danger.

---

## 🚀 Introduction
Phishing is one of the most common cyberattacks today. Unlike technical exploits, phishing targets **human psychology**. The goal of my project was to make phishing awareness more practical and effective by simulating real-world scenarios.

The simulator:
- Generates phishing-style emails  
- Hosts fake login pages that record interactions  
- Redirects users safely to the real site  
- Provides a **dashboard** where trainers can track campaigns and results  

This way, people can learn through experience while staying completely safe.

---

## 🎯 Objectives
When I started this project, I set a few key goals:
1. Build a working phishing simulation platform that feels realistic but is harmless.  
2. Provide trainers with campaign management tools (create, edit, monitor phishing tests).  
3. Log user credentials in a controlled way to demonstrate risks, then safely redirect them.  
4. Give trainers a dashboard to review results and use them as awareness material.  

In short: turn phishing from an invisible threat into a **hands-on learning experience**.

---

## 🛠️ Technology Stack
- **Laravel (PHP):** Framework for routing, authentication, and database operations  
- **Blade Templates & Tailwind CSS:** For realistic phishing pages and styling  
- **MySQL & SQLite:** Databases for storing campaigns and logs  
- **Laravel Mailer (Mailtrap/Gmail):** To send phishing-style emails in a safe, controlled setup  
- **Composer, Artisan CLI & VS Code:** Development tools for efficiency  

---

## 🏗️ System Features
- **Campaign Management (CRUD):** Create and manage phishing campaigns  
- **Phishing Simulation Login Pages:** Fake but safe login screens  
- **Credential Logging:** Capture (email, password, IP, browser) for demo purposes  
- **Dashboard:** View results and analyze attempts  
- **Email Simulation:** Send phishing-style emails via Mailtrap or Gmail  

---

## 🔄 Workflow
1. Trainer creates a phishing campaign from the dashboard  
2. A phishing email is sent to the target account  
3. The recipient clicks the link → sees a fake login page  
4. If they enter credentials, data gets logged  
5. User is redirected to the **real site**  
6. Trainer reviews results in the dashboard  

---

## ✅ Results
- Fully functional simulator built in Laravel  
- Campaigns could be created and tested  
- User interactions tracked and reviewed  
- Demonstrated **how easy it is to give away sensitive info unknowingly**  

---

## 📌 Applications
- Corporate security training programs  
- University cybersecurity courses  
- Public awareness workshops  

---

## ⚠️ Limitations & Future Work
- Currently limited to local hosting  
- Needs cloud deployment for scalability  
- More phishing templates and analytics would improve realism  
- Automation for dynamic phishing campaigns  

---

## 🔒 Ethical Considerations
This project is **strictly for awareness and education**.  
It must **never** be used against real users without consent. Running phishing simulations in uncontrolled environments is **illegal and unethical**.  

The whole purpose is to **protect people, not exploit them**.

---

## 🏁 Conclusion
Building this project was a rewarding experience. It reinforced the importance of human awareness in cybersecurity. Firewalls and detection systems can’t stop every attack—but training people to recognize phishing attempts can make a big difference.  

By simulating phishing in a safe way, I was able to turn theory into practice, making awareness more impactful.  

---

## 👨‍💻 Author
**Advait Kawale**  
2nd Year, Department of Computer Science and Engineering  
Ramdeobaba University, Nagpur
