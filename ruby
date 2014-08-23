#!/bin/bash

source ./lib/utils
source ~/.bash_profile

# Ruby

e_header "Installing RVM (Ruby Version Manager) and Ruby 1.9.3-p327, which becomes the default ..."
  curl -L https://get.rvm.io | bash -s stable
  source ~/.rvm/scripts/rvm

e_header "Installing packages required for RVM"
  brew install autoconf automake libtool pkg-config openssl readline libyaml sqlite libxml2 libxslt libksba

e_header "Installing Ruby 1.9.3 via RVM"
  rvm install 1.9.3
  rvm use 1.9.3 --default
  ruby -v

e_header "Installing bundler for handling dependencies..."
  gem install bundler --no-rdoc --no-ri

e_header "Installing guard for watching files for changes..."
  gem install guard --no-rdoc --no-ri

e_header "Installing KSS for generating styleguides..."
  gem install kss --no-rdoc --no-ri

e_header "Installing rake..."
  gem install rake --no-rdoc --no-ri

e_header "Installing latest version of Sass..."
  gem install sass --no-rdoc --no-ri

e_header "Installing latest version of Compass..."
  gem install compass --no-rdoc --no-ri

e_header "Updating Rubygems..."
  gem update

source ~/.bash_profile
