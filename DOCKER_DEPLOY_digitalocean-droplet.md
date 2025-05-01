# 🚀 Deploying a Dockerized Application to DigitalOcean VPS (Droplet)

This guide explains how to deploy a Dockerized application on a DigitalOcean VPS (called a "Droplet"). The repository must already include a `Dockerfile`.

---

## 🛠️ Prerequisites

- A DigitalOcean account: https://cloud.digitalocean.com/registrations/new
- A local machine with:
  - Docker installed: https://docs.docker.com/get-docker/
  - Git installed
  - SSH access to the VPS

---

## 📁 Step 1: Clone Your Repository (Locally)

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

Ensure the folder contains a valid `Dockerfile`.

---

## 🐳 Step 2: Build Docker Image (Locally)

```bash
docker build -t your-image-name .
```

To test it locally:

```bash
docker run -d -p 8080:80 your-image-name
```

---

## ☁️ Step 3: Create and Access a DigitalOcean Droplet

1. Go to: https://cloud.digitalocean.com/droplets/new
2. Choose:
   - Image: Ubuntu (22.04 LTS recommended)
   - Size: Based on your app needs (e.g., 1 GB RAM)
   - Authentication: SSH Key (recommended) or Password
   - Choose a datacenter region close to your users
3. Click **Create Droplet**
4. Once the Droplet is ready, note the **public IP address**

SSH into your Droplet:

```bash
ssh root@your-droplet-ip
```

---

## 🧱 Step 4: Install Docker on the Droplet

Once inside your VPS (Droplet), install Docker:

```bash
apt update
apt install -y docker.io
systemctl start docker
systemctl enable docker
```

(Optional) Verify installation:

```bash
docker --version
```

---

## 📦 Step 5: Transfer Your App to the VPS

### Option 1: Clone the Repository Inside the Droplet

```bash
apt install -y git
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### Option 2: Copy Local Files Using SCP

From your **local machine**:

```bash
scp -r ./your-repo root@your-droplet-ip:/root/
```

---

## 🔨 Step 6: Build and Run Docker Container on VPS

On your VPS:

```bash
cd your-repo
docker build -t your-app .
docker run -d -p 80:80 your-app
```

Now your app is running and accessible at `http://your-droplet-ip`.

---

## 🔐 Optional: Secure with HTTPS Using Nginx and Certbot

1. Install Nginx:

```bash
apt install -y nginx
```

2. Configure Nginx as a reverse proxy
3. Install Certbot and get an SSL certificate:

```bash
apt install -y certbot python3-certbot-nginx
certbot --nginx
```

Follow the instructions to complete HTTPS setup.

---

## 📌 Notes

- Use a `.env` file for secrets and pass them via `--env-file` in `docker run`.
- Add a firewall rule in DigitalOcean to allow HTTP/HTTPS traffic if needed.
- You can use `docker-compose` if you have multiple services.

---

## 🧹 Cleanup

To stop and remove the container:

```bash
docker ps
docker stop <container-id>
docker rm <container-id>
```

To delete the Droplet, go to your DigitalOcean dashboard.

---

## 📚 Resources

- [Docker Documentation](https://docs.docker.com/)
- [DigitalOcean Droplets](https://docs.digitalocean.com/products/droplets/)
- [Nginx Reverse Proxy](https://docs.nginx.com/)
- [Certbot for Let's Encrypt](https://certbot.eff.org/)

---