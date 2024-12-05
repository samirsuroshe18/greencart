@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Table', 'title' => 'Basic Tables'])

  <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Example</h4>
      </div>
      <div class="border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Striped rows</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden border border-default-200 rounded-md">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd:bg-white even:bg-default-100 dark:odd:bg-default-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 dark:odd:bg-default-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 dark:odd:bg-default-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 dark:odd:bg-default-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Edward King</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">16</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">LA No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 dark:odd:bg-default-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Red</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Melbourne No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Hoverable rows</h4>
      </div>
      <div class="border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr class="hover:bg-default-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="hover:bg-default-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="hover:bg-default-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="hover:bg-default-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Edward King</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">16</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">LA No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="hover:bg-default-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Red</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Melbourne No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end card -->

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Striped Hoverable</h4>
      </div>
      <div class="p-6 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden border border-default-200 rounded-md">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100 dark:odd:bg-default-50 odd:hover:!bg-default-100 even:hover:!bg-default-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100 dark:odd:bg-default-50 odd:hover:!bg-default-100 even:hover:!bg-default-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100 dark:odd:bg-default-50 odd:hover:!bg-default-100 even:hover:!bg-default-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100 dark:odd:bg-default-50 odd:hover:!bg-default-100 even:hover:!bg-default-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Edward King</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">16</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">LA No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr class="odd:bg-white even:bg-default-100 hover:bg-default-100 dark:odd:bg-default-50 odd:hover:!bg-default-100 even:hover:!bg-default-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Red</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Melbourne No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">highlighted tables</h4>
      </div>
      <div class="border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="bg-orange-100 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="bg-red-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-800">Joe Black</td>
                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800">31</td>
                    <td class="bg-primary/25 px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Bordered tables</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border overflow-hidden border-default-200">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Rounded tables</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg overflow-hidden border-default-200">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Table thead horizontally divided</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg shadow overflow-hidden border-default-200 dark:shadow-gray-900">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr class="divide-x divide-default-200">
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Header in Gray color</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg overflow-hidden border-default-200">
              <table class="min-w-full divide-y divide-default-200">
                <thead class="bg-default-100">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase dark:text-gray-400">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">With shadow</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg shadow-lg overflow-hidden border-default-200 dark:shadow-gray-900">
              <table class="min-w-full divide-y divide-default-200">
                <thead class="bg-default-100">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase dark:text-gray-400">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Headless</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg shadow overflow-hidden border-default-200 dark:shadow-gray-900">
              <table class="min-w-full divide-y divide-default-200">
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Table foot</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase dark:text-gray-400">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase dark:text-gray-400">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Footer</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Footer</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Footer</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Footer</a>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Captions</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-default-200">
                <caption class="py-2 text-left text-sm text-gray-600 dark:text-gray-500">List of users</caption>
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Overflow</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-default-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Title</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Regional Paradigm Technician</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">john@site.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Forward Response Developer</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">jim@site.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Product Directives Officer</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">joe@site.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Selection</h4>
      </div>

      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg overflow-hidden border-default-200">
              <table class="min-w-full divide-y divide-default-200">
                <thead class="bg-default-100">
                  <tr>
                    <th scope="col" class="py-3 ps-4">
                      <div class="flex items-center h-5">
                        <input id="table-checkbox-all" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                        <label for="table-checkbox-all" class="sr-only">Checkbox</label>
                      </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                  <tr>
                    <td class="py-3 ps-4">
                      <div class="flex items-center h-5">
                        <input id="table-checkbox-1" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                        <label for="table-checkbox-1" class="sr-only">Checkbox</label>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="py-3 ps-4">
                      <div class="flex items-center h-5">
                        <input id="table-checkbox-2" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                        <label for="table-checkbox-2" class="sr-only">Checkbox</label>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="py-3 ps-4">
                      <div class="flex items-center h-5">
                        <input id="table-checkbox-3" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                        <label for="table-checkbox-3" class="sr-only">Checkbox</label>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="py-3 ps-4">
                      <div class="flex items-center h-5">
                        <input id="table-checkbox-4" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                        <label for="table-checkbox-4" class="sr-only">Checkbox</label>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Edward King</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">16</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">LA No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="py-3 ps-4">
                      <div class="flex items-center h-5">
                        <input id="table-checkbox-5" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                        <label for="table-checkbox-5" class="sr-only">Checkbox</label>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Red</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Melbourne No. 1 Lake Park</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Search input</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg divide-y divide-default-200 border-default-200">
              <div class="py-3 px-4">
                <div class="relative lg:flex hidden">
                  <input type="search" class="ps-12 pe-4 py-2.5 block lg:w-64 border-none bg-default-100 text-default-700 rounded-lg text-sm focus:border-primary focus:ring-primary" placeholder="Search for items...">
                  <span class="absolute start-4 top-2.5">
                    <i class="ti ti-search text-lg text-default-600"></i>
                  </span>
                </div>
              </div>
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-default-200">
                  <thead class="bg-default-100">
                    <tr>
                      <th scope="col" class="py-3 px-4 pe-0">
                        <div class="flex items-center h-5">
                          <input id="table-search-checkbox-all" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-search-checkbox-all" class="sr-only">Checkbox</label>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-default-200">
                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-search-checkbox-1" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-search-checkbox-1" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-search-checkbox-2" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-search-checkbox-2" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-search-checkbox-3" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-search-checkbox-3" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-search-checkbox-4" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-search-checkbox-4" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Edward King</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">16</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">LA No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-search-checkbox-5" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-search-checkbox-5" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Red</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Melbourne No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">With pagination</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="overflow-x-auto">
          <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg divide-y divide-default-200 border-default-200">
              <div class="py-3 px-4">
                <div class="relative lg:flex hidden">
                  <input type="search" class="ps-12 pe-4 py-2.5 block lg:w-64 border-none bg-default-100 text-default-700 rounded-lg text-sm focus:border-primary focus:ring-primary" placeholder="Search for items...">
                  <span class="absolute start-4 top-2.5">
                    <i class="ti ti-search text-lg text-default-600"></i>
                  </span>
                </div>
              </div>
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-default-200">
                  <thead class="bg-default-100">
                    <tr>
                      <th scope="col" class="py-3 px-4 pe-0">
                        <div class="flex items-center h-5">
                          <input id="table-pagination-checkbox-all" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-pagination-checkbox-all" class="sr-only">Checkbox</label>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Name</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Age</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-default-600 uppercase">Address</th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-default-600 uppercase">Action</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-default-200">
                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-pagination-checkbox-1" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-pagination-checkbox-1" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">John Brown</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">New York No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-pagination-checkbox-2" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-pagination-checkbox-2" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Green</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">27</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">London No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-pagination-checkbox-3" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-pagination-checkbox-3" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Joe Black</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">31</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Sidney No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-pagination-checkbox-4" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-pagination-checkbox-4" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Edward King</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">16</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">LA No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="py-3 ps-4">
                        <div class="flex items-center h-5">
                          <input id="table-pagination-checkbox-5" type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0">
                          <label for="table-pagination-checkbox-5" class="sr-only">Checkbox</label>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">Jim Red</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">45</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">Melbourne No. 1 Lake Park</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a class="text-primary hover:text-primary-600 transition-all" href="#">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="py-1 px-4">
                <nav class="flex items-center space-x-2">
                  <a class="text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="#" aria-current="page">1</a>
                  <a class="w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">2</a>
                  <a class="w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">3</a>
                  <a class="text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                    <span class="sr-only">Next</span>
                    <span aria-hidden="true">»</span>
                  </a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end card -->
  </div>

</div>

@endsection