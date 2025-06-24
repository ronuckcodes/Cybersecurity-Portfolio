<?php 
    include('functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cybersecurity Portfolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .portfolio-section {
            margin: 20px 0;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 5px;
        }
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .skill {
            background: #5F9EA0;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
        }
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .project-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Cybersecurity Portfolio</h2>
    </div>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        
        <!-- logged in user information -->
        <div class="profile_info">
            <img src="images/user_profile.png">
            <div>
                <?php if (isset($_SESSION['user'])) : ?>
                    <strong><?php echo $_SESSION['user']['username']; ?></strong>
                    <small>
                        <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                        <br>
                        <a href="index.php?logout='1'" style="color: red;">logout</a>
                    </small>
                <?php endif ?>
            </div>
        </div>

        <!-- Portfolio Content -->
        <div class="portfolio-section">
            <h3>About Me</h3>
            <p>Cybersecurity student with a passion for ethical hacking, network security, and penetration testing. Currently pursuing a degree in Cybersecurity with hands-on experience in various security tools and technologies.</p>
        </div>

        <div class="portfolio-section">
            <h3>Skills</h3>
            <div class="skills-list">
                <span class="skill">Network Security</span>
                <span class="skill">Penetration Testing</span>
                <span class="skill">Ethical Hacking</span>
                <span class="skill">Firewall Configuration</span>
                <span class="skill">Vulnerability Assessment</span>
                <span class="skill">Kali Linux</span>
                <span class="skill">Wireshark</span>
                <span class="skill">Metasploit</span>
                <span class="skill">Python</span>
                <span class="skill">SIEM Tools</span>
            </div>
        </div>

        <div class="portfolio-section">
            <h3>Projects</h3>
            <div class="projects">
                <div class="project-card">
                    <h4>Network Vulnerability Scanner</h4>
                    <p>A Python-based tool that scans networks for open ports and known vulnerabilities.</p>
                </div>
                <div class="project-card">
                    <h4>Phishing Detection System</h4>
                    <p>Machine learning model to detect phishing websites with 95% accuracy.</p>
                </div>
                <div class="project-card">
                    <h4>Secure Login System</h4>
                    <p>Implemented multi-factor authentication for web applications.</p>
                </div>
            </div>
        </div>

        <div class="portfolio-section">
            <h3>Certifications</h3>
            <ul>
                <li>CompTIA Security+</li>
                <li>Certified Ethical Hacker (CEH)</li>
                <li>Cisco CCNA Security</li>
            </ul>
        </div>
    </div>
</body>
</html>
