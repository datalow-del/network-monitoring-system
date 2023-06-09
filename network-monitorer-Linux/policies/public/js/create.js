/*
 *Network Monitorer / create policy
 *
 */

 function generateIPTables() {
	function setDefaultPolicy(chain, policy) {
		rulesetId.appendChild(document.createElement("p"));
		rulesetId.appendChild(document.createTextNode("-P " + chain + " " + policy));
	}

	function getRulesetId() {
		return document.getElementById("ruleset");
	}

	function evaluateCheckbox(checkboxName, outputText) {
		if (document.form.elements[checkboxName].checked) {
			rulesetId.appendChild(document.createElement("p"));
			rulesetId.appendChild(document.createTextNode(outputText));
		}
	}

	if (document.form.elements["isRedHat"].checked) {
		input = "RH-Firewall-1-INPUT";
		output = "RH-Firewall-1-OUTPUT";
		forward = "RH-Firewall-1-FORWARD";
	}
	else {
		input = "INPUT";
		output = "OUTPUT";
		forward = "FORWARD";
	}

	// create firewall rules
	var rulesetId = getRulesetId();
    rulesetId.innerHTML="";
	function importpolicy(){

	var text = document.getElementById("ruleset");
	text.innerHTML= text.innerText || text.textContents;
	console.log(text);
	}

	// Defaults as  (DROP)
	setDefaultPolicy(input, "DROP");
        if (document.form.elements["outgoing"].checked) {
	    setDefaultPolicy(output, "DROP");
        }
        else {
            setDefaultPolicy(output, "ACCEPT");
        }
	setDefaultPolicy(forward, "DROP");

	cidr = document.form.elements["network"].value;

	// Loopback and outbound state rules
	evaluateCheckbox("loopback", "-A " + input + " -i lo -j ACCEPT");
	evaluateCheckbox("outgoing", "-I " + output + " 1 -m state --state RELATED,ESTABLISHED -j ACCEPT");
	evaluateCheckbox("outgoing", "-A " + output + " -p udp --dport 53 -m state --state NEW -j ACCEPT");
	evaluateCheckbox("outgoing", "-A " + output + " -o lo -j ACCEPT");
	
	// TCP and UDP port rules
	evaluateCheckbox("tcp_21", "-A " + input + " -p tcp --dport 21 -m state --state NEW -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("tcp_22", "-A " + input + " -p tcp --dport 22 -m state --state NEW -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("tcp_25", "-A " + input + " -p tcp --dport 25 -m state --state NEW -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("tcp_80", "-A " + input + " -p tcp --dport 80 -m state --state NEW -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("tcp_110", "-A " + input + " -p tcp --dport 110 -m state --state NEW -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("udp_123", "-A " + input + " -p udp -m udp --dport 123 -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("udp_67", "-A " + input + " -p udp -m udp --dport 67 -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("udp_53", "-A " + input + " -p udp -m udp --dport 53 -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("udp_9987", "-A " + input + " -p udp -m udp --dport 9987 -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("udp_9987", "-A " + output + " -p udp -m udp --dport 9987 -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("udp_9987", "-A " + input + " -p udp -m tcp --dport 3033 -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("udp_9987", "-A " + output + " -p udp -m tcp --dport 3033 -s " + cidr + " -j ACCEPT");
	// Arbitrary TCP port range rules
	start_port = document.form.elements["start_port"].value;
	end_port = document.form.elements["end_port"].value;
	
	if ((start_port) && (end_port)) {
		for (port=start_port; port<=end_port; port++) {
			rulesetId.appendChild(document.createElement("p"));
			rulesetId.appendChild(document.createTextNode("-A " + input + " -p tcp --dport " + port + " -m state --state NEW -s " + cidr + " -j ACCEPT"));	
		}
	}
	else if ((start_port) && (!end_port)) {
		rulesetId.appendChild(document.createElement("p"));
		rulesetId.appendChild(document.createTextNode("-A " + input + " -p tcp --dport " + start_port + " -m state --state NEW -s " + cidr + " -j ACCEPT"));
	}	
	
	
	// ICMP rules
	evaluateCheckbox("icmp_8", " -A " + input + " -p icmp --icmp-type 8 -s " + cidr + " -j ACCEPT");
	evaluateCheckbox("icmp_11", "-A " + input + " -p icmp --icmp-type 11 -s " + cidr + " -j ACCEPT");

// Send rules to firewall config



	return false;
}
