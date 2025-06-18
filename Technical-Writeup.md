# Technical Implementation Details

## 🔒 Security Measures Implemented

1. **Network Layer Security**
   - Default deny firewall policy
   - Port restriction (only 80, 443, and restricted 22)
   - Protection against SYN floods

2. **Application Layer Security**
   - Role-Based Access Control (Admin/User)
   - Password hashing with MD5 (Note: Would upgrade to bcrypt in production)
   - Secure file permissions (`chmod 755 /var/www/mysite`)

3. **Monitoring**
   - Real-time Apache service monitoring
   - Email alerts for service interruptions
   - Performance baseline tracking

## 🧠 Lessons Learned
- Importance of persistent firewall rules
- Value of monitoring before incidents occur
- Challenges of balancing security and usability
