from django.shortcuts import render
from django.http import HttpResponse

from django.core.mail import send_mail
from django.conf import settings
from .models import Contact, Project_data

# Create your views here.
def index(request):
  return render(request, 'index.html')

def about(request):
  return render(request, 'about.html')

def services(request):
  return render(request, 'services.html')

def projects(request):
  
  projs = Project_data.objects.all()
  
  return render(request, 'projects.html', {'projs': projs})

def civilprojects(request):
  
  projs = Project_data.objects.all()
  
  return render(request, 'civilprojects.html', {'projs': projs})

def interiorprojects(request):
  
  projs = Project_data.objects.all()
  
  return render(request, 'interiorprojects.html', {'projs': projs})

def contact(request):
  if request.method == 'POST':
    contact=Contact()
    name=request.POST.get('name')
    email=request.POST.get('email')
    subject=request.POST.get('subject')
    message=request.POST.get('message')
    sub=f"This is the correct details submitted by {name}"
    mes=f"Here are the details provided\n\n Name:{name}\n\n Email:{email}\n\n Suject:{subject}\n\n Message:{message}"
    contact.name=name
    contact.email=email
    contact.subject=subject
    contact.message=message
    contact.save()
    
    send_mail(sub,mes,"muhammedasifsalim2000@gmail.com",["alfirahim2000@gmail.com"])
    
  return render(request, 'contact.html')