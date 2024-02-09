from django.db import models

# Create your models here.
class Contact(models.Model):
  name = models.CharField(max_length=225)
  email = models.EmailField()
  subject = models.TextField(max_length=225) 
  message = models.TextField(max_length=225)
  def __str__(self):
    return self.name
  
  
class Project_data(models.Model):
  
  name = models.CharField(max_length=200)
  section_name = models.CharField(max_length=200)
  img = models.ImageField(upload_to='projects')
  
  

  