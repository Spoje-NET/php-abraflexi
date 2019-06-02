Vagrant.configure("2") do |config|
#  config.vm.box = "ubuntu/zesty64"
  config.vm.box = "ubuntu/bionic64"
#  config.vm.box = "centos/7"
  config.vm.provision :shell, path: "bootstrap-debian.sh"
  config.vm.provision :shell, path: "bootstrap-centos.sh"
  config.vm.network :forwarded_port, guest: 80, host: 8080
end
