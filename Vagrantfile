Vagrant.configure(2) do |config|
  config.vm.box = "provolution/packer-lamp"

  unless Vagrant.has_plugin?("vagrant-hostupdater")
    config.vm.hostname = "dev.golfpost.de"
  end

  # API calls
  config.vm.network :forwarded_port, guest: 80, host: 9999

  config.vm.network :private_network, ip: "192.168.222.10"
  config.vm.synced_folder "./", "/var/www/project", :nfs => true
  config.ssh.forward_agent = true
  config.ssh.insert_key = false
  config.vm.boot_timeout = 600
  config.vm.provider "virtualbox" do |v|
      v.memory = 2048
      v.cpus = 2
  end
  config.vm.provision "shell", path: "src/setup.sh"
end
