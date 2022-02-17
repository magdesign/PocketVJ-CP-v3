import pygame
from pygame.locals import *
import sys, os
import time

# # get screenresolution
# import subprocess
# cmd = ['xrandr']
# cmd2 = ['grep', '*']
# p = subprocess.Popen(cmd, stdout=subprocess.PIPE)
# p2 = subprocess.Popen(cmd2, stdin=p.stdout, stdout=subprocess.PIPE)
# p.stdout.close()
# resolution_string, junk = p2.communicate()
# resolution = resolution_string.split()[0]
# width, height = resolution.split('x')

pygame.init()
pygame.display.set_caption('Paintme')
mouse = pygame.mouse
fpsClock = pygame.time.Clock()

## Define window size
#width = 960
#height = 540
#window = pygame.display.set_mode((width, height))

#make window always fullscreen
window = pygame.display.set_mode((0, 0), pygame.FULLSCREEN)
canvas = window.copy()

#                     R    G    B
BLACK = pygame.Color( 0 ,  0 ,  0 )
WHITE = pygame.Color(255, 255, 255)


canvas.fill(WHITE)


#define painter thickness
edding = 15

while True:

  for event in pygame.event.get():
    left_pressed, middle_pressed, right_pressed = mouse.get_pressed()
    if event.type == pygame.MOUSEBUTTONDOWN:
      if event.button == 4:
        print ("scroller down, smaller edding")
        if edding < 3:
          print ("smaller than 3 pixel, do nothing")
          #break
        elif edding > 3:
          edding -= 1
        
      elif event.button == 5:
        print ("scroller up, bigger edding")
        edding += 1
    if event.type == QUIT:
      pygame.quit()
      sys.exit()
    elif left_pressed:
      print ("left pressed, paint black")
      pygame.draw.circle(canvas, BLACK, (pygame.mouse.get_pos()),edding)
    elif right_pressed:
      print ("right pressed, paint white")
      pygame.draw.circle(canvas, WHITE, (pygame.mouse.get_pos()),edding) 

        
        
  window.fill(WHITE)
  
  window.blit(canvas, (0, 0))

  pygame.draw.circle(window, BLACK, (pygame.mouse.get_pos()), edding)
  pygame.display.update()



# save a screenshot:
# /opt/screenshot/./screenshot > "/media/internal/images/screenshot.png"

# and erase the white bg and make it transparent:
# convert /media/internal/images/screenshot.png -fuzz 20% -transparent white /media/internal/images/mapping_mask.png