@extends('user.layouts.app')
@section('title', 'Shipping')
@section('content')
  <div class="px-5 md:px-0 mx-auto max-w-7xl">
    <h1 class="font-bold text-2xl text-center my-5">SHIPPING</h1>
    <div class="space-y-8">
      {{-- Delivery, Shipping & Pick-up Services --}}
      <div class="space-y-2">
        <h5 class="font-medium">Delivery, Shipping & Pick-up Services</h5>
        <p class="text-sm md:text-xs text-gray-500 leading-6 text-justify">Each store's pickup and delivery services are unique to their local area. Please contact your local store to find out what services are available.

          Currently, we are only able to deliver or ship furniture within a store's local delivery area and are unable to ship merchandise by alternate methods.
          
          All online orders must be paid in full at the time of purchase.</p>
      </div>
      <div class="space-y-5">
        <h5 class="font-medium">Services</h5>
        <ul class="list-inside">
          <h6 class="font-medium my-1">Delivery Service</h6>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Delivery of furniture to your home</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Assembly of your furniture (except on "Ready to Assemble" merchandise)</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">For a period of one year, in-home service for repair or replacement of defective items</li>
          <h6 class="font-medium my-1">To ensure smooth delivery of your furniture, please review the following delivery policies:</h6>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">All online orders must be paid in full at the time of purchase</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">The day prior to your scheduled delivery date, our service store will contact you by phone to confirm an estimated three (3) hour time window for your delivery. Unfortunately, we cannot take requests for time stops</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">If you must reschedule your delivery date, please notify your service store immediately or email us at flipstudio@gmail.com</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">In preparation for your merchandise delivery, doorways should be measured to ensure clearance and rooms cleared so there is an unobstructed path between the point of entry to your home and the room where your new merchandise will be placed</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Due to liability issues, we cannot hoist merchandise, set up lamps, hang pictures or mirrors on walls, make electrical connections or move existing furniture, electronics, televisions, etc.</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">We cannot deliver to anyone under age 18</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">If, during delivery, your merchandise or property has been damaged, you must notify store personnel within 7 days of the date of delivery</li>
        </ul>
        <ul class="list-inside">
          <h6 class="font-medium my-1">Manufacturer Parcel Shipping Service</h6>
          <p class="my-1">Our Shipping Services Include:</p>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Free Shipment of furniture to your home</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Merchandise is delivered through a variety of national or regional carriers, such as but not limited to: FedEx, UPS, and Ground Freight Expeditors.</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Merchandise is shipped ground and can take up to 5 days to be delivered depending on your location</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">After an order has shipped, tracking information is emailed to your registered email address</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">If, during shipping, your merchandise has been damaged, you must notify store personnel within 7 days of the date of delivery.</li>
        </ul>
        <ul class="list-inside">
          <h6 class="font-medium my-1">Merchandise Pick-Up Service</h6>
          <p class="my-1">Pick-ups can be made at most of our store locations or distribution centers.</p>
          <p class="my-1">To ensure smooth pick-up of your furniture, please review the following pick-up policies:</p>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">At the time of purchase, you will be notified what day your purchase will be ready for pickup. If an item is unavailable for the scheduled day, you will be notified by the service store in advance</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Online orders must be paid in full at the time of purchase</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">On the scheduled day, please proceed to the pickup/loading area with your receipt</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Please be sure that the size of your vehicle will accommodate the size of the furniture to be picked up. It is your responsibility to properly secure and tie down merchandise to your vehicle</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Associates may assist in loading customer merchandise but we reserve the right to refuse assistance where it may result in injuries or property damage</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">We will not be responsible for any damage or loss caused to customer merchandise and/or any vehicles during the loading or transportation of the customer's merchandise</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Be sure to inspect your purchase for any visible signs of defect prior to departing the store. Once picked up, if you discover damages to your merchandise, you must notify store personnel within 7 days of taking possession of the merchandise and arrange to bring your merchandise to the store for service or exchange</li>
          <li class="text-sm md:text-xs list-disc indent-8 text-gray-500 my-2 text-justify">Service Stores do not have the ability to hold merchandise past the scheduled date of pickup. If you are unable to pick up your merchandise on your scheduled day, notify the service store immediately</li>
        </ul>
        <div class="space-y-3">
          <h5 class="font-medium">Reporting Damaged or Defective Furniture</h5>
          <p class="text-sm md:text-xs text-gray-500 my-2 text-justify">If during delivery your merchandise or property has been damaged, you must notify store personnel within 7 days of the date of delivery. If you believe a product to be defective please notify store personnel.</p>
          <p class="text-sm md:text-xs text-gray-500 my-2 text-justify">If during shipping your merchandise has been damaged, you must notify store personnel within 7 days of the date of delivery. Damaged merchandise will be repaired or replaced. Customers who have merchandise shipped from a vendor are required to return the merchandise to their local store if repair or return is required.</p>
          <p class="text-sm md:text-xs text-gray-500 my-2 text-justify">If during or after you have picked-up your furniture you discover damages to your merchandise, you must notify store personnel within 7 days of taking possession of the merchandise. Customers that pick-up merchandise from the store or have merchandise shipped directly to their home, are required to return the merchandise to the store for service or exchange.</p>
        </div>
      </div>
    </div>
  </div>
@endsection
