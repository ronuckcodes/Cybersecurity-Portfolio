# 🔒 Secure Web Infrastructure Deployment



A production-grade implementation of a secure web server with monitoring and firewall hardening.

## Features
- ✅ **Apache/WordPress** with RBAC access control
- ✅ **iptables Firewall** (only HTTP/HTTPS/restricted SSH)
- ✅ **Zabbix Monitoring** with email alerts
- ✅ Automated security hardening

## Quick Start
```bash
# Deploy firewall rules
sudo bash Firewall-Configuration/iptables-rules

# Set up WordPress
cd Web-Server-Deployment/wordpress-setup
sudo bash install.sh
