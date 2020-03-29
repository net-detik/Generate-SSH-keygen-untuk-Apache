mkdir /var/www/.ssh
chown -R apache:nobody /var/www/.ssh
sudo -u apache ssh-keygen -t rsa
