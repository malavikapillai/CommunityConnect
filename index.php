<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Resource Directory</title>
    <!-- Tailwind CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .chat-container {
            height: calc(100vh - 250px);
        }
        .chat-messages {
            height: calc(100% - 70px);
            overflow-y: auto;
        }
        .user-message {
            background-color: #E2F2FF;
            border-radius: 18px 18px 0 18px;
        }
        .bot-message {
            background-color: #F0F0F0;
            border-radius: 18px 18px 18px 0;
        }
        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <!-- Navbar -->
     <!-- Navbar -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    
    <!-- Logo & Name -->
    <div class="flex items-center space-x-3">
      <i class="fas fa-hand-holding-heart text-indigo-600 text-3xl animate-pulse"></i>
      <div>
        <h1 class="text-2xl font-extrabold text-gray-800">CommConnect</h1>
        <p class="text-sm text-gray-500 -mt-1">Your Friendly Local Guide</p>
      </div>
    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-6 text-base">
      <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Home</a>
      <a href="#contributors" class="text-gray-700 hover:text-indigo-600 transition duration-200">Contributors</a>
      <a href="#chatbot" class="text-gray-700 hover:text-indigo-600 transition duration-200">
        <i class="fas fa-robot mr-1"></i> ChatBot
      </a>
      
      <!-- Location Section -->
      <span id="nav-location" class="text-sm text-gray-500 ml-4 flex items-center">
        <i class="fas fa-map-marker-alt text-red-500 mr-1"></i> 
        <span id="location-text">
          <?php 
            // Check if location is passed in query string
            if(isset($_GET['location'])){
              echo htmlspecialchars($_GET['location']);
            } else {
              echo '<a href="location.html" class="text-indigo-800 cursor-pointer hover:text-indigo-800">Get your location</a>';
            }
          ?>
        </span>
      </span>
    </div>
  </div>
</nav>
  



    <!-- Main Content -->
    <main class="flex-grow">
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Find Local Resources & Get Help</h2>
            
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Resources Section (Left) -->
                
<div class="w-full lg:w-1/2 bg-white rounded-2xl shadow-lg p-6 transform transition duration-300 ease-in-out hover:scale-105">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Community Resources</h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Resource Card 1 -->
        <div class="resource-card bg-white border border-gray-200 rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mr-4 shadow-inner">
                    <i class="fas fa-heartbeat text-red-500 text-lg"></i>
                </div>
                <h4 class="font-semibold text-gray-900">Healthcare</h4>
            </div>
            <p class="text-sm text-gray-600 mb-2">Find local clinics, hospitals, and healthcare programs.</p>
            <!-- <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium transition">Learn more →</a> -->
        </div>

        <!-- Resource Card 2 -->
        <div class="resource-card bg-white border border-gray-200 rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4 shadow-inner">
                    <i class="fas fa-book text-blue-500 text-lg"></i>
                </div>
                <h4 class="font-semibold text-gray-900">Education</h4>
            </div>
            <p class="text-sm text-gray-600 mb-2">Schools, libraries, tutoring, and educational resources.</p>
            <!-- <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium transition">Learn more →</a> -->
        </div>

        <!-- Resource Card 3 -->
        <div class="resource-card bg-white border border-gray-200 rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4 shadow-inner">
                    <i class="fas fa-apple-alt text-green-500 text-lg"></i>
                </div>
                <h4 class="font-semibold text-gray-900">Food Assistance</h4>
            </div>
            <p class="text-sm text-gray-600 mb-2">Food banks, meal programs, and nutrition resources.</p>
            <!-- <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium transition">Learn more →</a> -->
        </div>

        <!-- Resource Card 4 -->
        <div class="resource-card bg-white border border-gray-200 rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center mr-4 shadow-inner">
                    <i class="fas fa-home text-yellow-500 text-lg"></i>
                </div>
                <h4 class="font-semibold text-gray-900">Housing</h4>
            </div>
            <p class="text-sm text-gray-600 mb-2">Shelters, affordable housing, and rental assistance.</p>
            <!-- <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium transition">Learn more →</a> -->
        </div>

        <!-- Resource Card 5 -->
        <div class="resource-card bg-white border border-gray-200 rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4 shadow-inner">
                    <i class="fas fa-briefcase text-purple-500 text-lg"></i>
                </div>
                <h4 class="font-semibold text-gray-900">Employment</h4>
            </div>
            <p class="text-sm text-gray-600 mb-2">Job listings, career training, and employment services.</p>
            <!-- <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium transition">Learn more →</a> -->
        </div>

        <!-- Resource Card 6 -->
        <div class="resource-card bg-white border border-gray-200 rounded-2xl p-5 shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4 shadow-inner">
                    <i class="fas fa-hand-holding-heart text-orange-500 text-lg"></i>
                </div>
                <h4 class="font-semibold text-gray-900">Mental Health</h4>
            </div>
            <p class="text-sm text-gray-600 mb-2">Counseling, support groups, and crisis resources.</p>
            <!-- <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium transition">Learn more →</a> -->
        </div>
    </div>
</div>






                

                <!-- Chatbot Section (Right) -->
<!-- Chatbot Section (Right) -->
<div class="w-full lg:w-1/2 bg-white rounded-xl shadow-md overflow-hidden transform transition-all duration-500 hover:scale-105" id="chatbot">
    <div class="bg-indigo-600 text-white p-4">
        <div class="flex items-center">
            <i class="fas fa-robot text-2xl mr-3"></i>
            <h3 class="text-xl font-semibold">Resource Assistant</h3>
        </div>
        <p class="text-sm text-indigo-200 mt-1">Ask me about local resources and services</p>
    </div>
    
    <div class="chat-container p-4">
        <div class="chat-messages p-2"></div>
        
        <div class="chat-input mt-4">
            <form id="chat-form" class="flex">
                <input type="text" id="message-input" class="flex-grow border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Type your message here...">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition">
                    <i class="fas fa-paper-plane mr-2"></i>Send
                </button>
            </form>
        </div>
    </div>
</div>

                        
            </div>
        </div>
    </main>


    <!-- Contributors Section -->

    <section id="impact" class="bg-gray-100 py-12">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-10">Making a Difference</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Testimonial 1 -->
      <blockquote class="bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:scale-[1.02]">
        <p class="italic text-gray-700">"ComConnect helped me find the nearest shelter when I was in need. It's fast, simple, and reliable."</p>
        <footer class="mt-4 text-gray-500 text-sm">– Local User</footer>
      </blockquote>
      
      <!-- Testimonial 2 -->
      <blockquote class="bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:scale-[1.02]">
        <p class="italic text-gray-700">"I didn't know where to find food banks in my city. ComConnect gave me instant answers with just my location."</p>
        <footer class="mt-4 text-gray-500 text-sm">– Community Volunteer</footer>
      </blockquote>
      
      <!-- Testimonial 3 -->
      <blockquote class="bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:scale-[1.02]">
        <p class="italic text-gray-700">"The chatbot interface is so smooth. I got connected to a nearby free clinic without having to search on Google."</p>
        <footer class="mt-4 text-gray-500 text-sm">– Student User</footer>
      </blockquote>
      
      <!-- Testimonial 4 -->
      <blockquote class="bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:scale-[1.02]">
        <p class="italic text-gray-700">"I recommended ComConnect to my local NGO group. It's exactly what underserved communities need."</p>
        <footer class="mt-4 text-gray-500 text-sm">– NGO Coordinator</footer>
      </blockquote>
      
    </div>
  </div>
</section>


    




    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-hand-holding-heart  text-indigo-400 text-2xl"></i>
                        <h3 class="text-xl font-bold">CommConnect</h3>
                    </div>
                    <p class="mt-2 text-gray-400 max-w-md">Connecting our community with the resources they need for a better tomorrow.</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold mb-3">Navigation</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Resources</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Contributors</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Contact</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold mb-3">Resources</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Healthcare</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Education</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Food Assistance</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">View All</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold mb-3">Connect</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook mr-2"></i>Facebook</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram mr-2"></i>Instagram</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition"><i class="far fa-envelope mr-2"></i>Newsletter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400">&copy; 2025 Community Resource Hub. All rights reserved.</p>
                <div class="mt-4 md:mt-0 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- PHP connection would go here in a real implementation -->
    <!-- JavaScript for chat functionality -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatForm = document.getElementById('chat-form');
        const messageInput = document.getElementById('message-input');
        const chatMessages = document.querySelector('.chat-messages');
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'bot-message p-3 mb-4 max-w-3/4 inline-block';
        typingIndicator.innerHTML = '<p><i class="fas fa-circle-notch fa-spin"></i> Assistant is typing...</p>';
        
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const message = messageInput.value.trim();
            if (message !== '') {
                // Add user message
                addMessage(message, 'user');
                messageInput.value = '';
                
                // Show typing indicator
                chatMessages.appendChild(typingIndicator);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
                // Call the PHP backend that will use Gemini API
                fetchGeminiResponse(message);
            }
        });
        
        function addMessage(message, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.className = sender === 'user' ? 'user-message p-3 mb-4 max-w-3/4 ml-auto' : 'bot-message p-3 mb-4 max-w-3/4 inline-block';
            messageDiv.innerHTML = `<p>${message}</p>`;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }



        function getLocationFromURL() {
    const params = new URLSearchParams(window.location.search);
    return params.get("location") || "unknown location";
}

const userLocation = getLocationFromURL();
        
    function fetchGeminiResponse(userMessage) {
    const fullContext = `
You are a helpful community resource assistant. Your goal is to help users find local community resources including healthcare, food assistance, housing, education, employment, and mental health services.
Keep your answers friendly, informative, and focused on connecting people with resources.
The user's current location is: ${userLocation}.
`;

    fetch('process_gemini.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            message: userMessage,
            context: fullContext
        })
    })
    .then(response => response.json())
    .then(data => {
        if (chatMessages.contains(typingIndicator)) {
            chatMessages.removeChild(typingIndicator);
        }

        if (data.error) {
            addMessage("I'm sorry, I encountered an error. Please try again later.", 'bot');
            console.error(data.error);
        } else {
            addMessage(data.response, 'bot');
        }
    })
    .catch(error => {
        if (chatMessages.contains(typingIndicator)) {
            chatMessages.removeChild(typingIndicator);
        }
        console.error('Error:', error);
        addMessage("I'm sorry, I'm having trouble connecting right now. Please try again later.", 'bot');
    });
}

    });
</script>
</body>
</html>