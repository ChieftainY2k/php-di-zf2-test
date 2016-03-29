#!/usr/bin/env bash

# install ansible
#sudo apt-get install -y ansible

# install the NEWEST ansible
sudo apt-get -y install software-properties-common
sudo apt-add-repository -y ppa:ansible/ansible
sudo apt-get -y update
sudo apt-get -y install ansible

# install PHP 5.6 repository
sudo add-apt-repository -y ppa:ondrej/php5-5.6
sudo apt-get update

#provision with ansible (compatible with windows vagrant)
cp -r /vagrant/provisioning-ansible /tmp/
chmod -R a-x /tmp/provisioning-ansible/ 
sudo ansible-playbook -v /tmp/provisioning-ansible/site.yml -i /tmp/provisioning-ansible/hosts --connection=local

# quick commandline one-liner for ansible playbooks testing
# rm -rf /tmp/provisioning-ansible/; cp -R /vagrant/provisioning-ansible/ /tmp/; chmod -R a-x /tmp/provisioning-ansible; sudo ansible-playbook -v /tmp/provisioning-ansible/site.yml -i /tmp/provisioning-ansible/hosts --connection=local

# install Composer
echo Installing composer...
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# update vendors
echo Updating vendor code...
cd /var/www/mysite
composer install

